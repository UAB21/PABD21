<?php

namespace App\Controller;

use App\Entity\Image;
use App\Service\FileUploader;
use App\Form\ImageForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class GalerieFotoController extends AbstractController
{
    public function index(Request $request, FileUploader $fileUploader): Response
    {
        $images = $this->getDoctrine()
            ->getRepository(Image::class)
            ->findAll();

        return $this->render("GalerieFoto.html.twig", [
            "uploads_directory" => "uploads/",
            "images" => $images
        ]);
    }

    /**
     * @Route("/galerie_foto/new", name="galerie_foto_new")
     *
     * @return Response
     */
    public function newImage(Request $request, FileUploader $fileUploader)
    {  
        $image = new Image();
        $form = $this->createForm(ImageForm::class, $image);
            
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $uploadedImage */
                
            $uploadedImage = $form->get("file")->getData();
                
            if ($uploadedImage) {
                $uploadedImageName = $fileUploader->upload($uploadedImage);

                $imageName = $form->get("name")->getData();
                $image->setName($imageName);
                $image->setOriginalName($uploadedImageName);

                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($image);
                $entityManager->flush();

                return $this->redirectToRoute("galerie_foto");
            }
        }

        return $this->render("GalerieFoto.html.twig", [
            "uploads_directory" => "uploads/",
            "form" => $form->createView(),
            "new" => true
        ]);
    }

    /**
     * @Route("/galerie_foto/edit/{id}", name="galerie_foto_edit")
     *
     * @return Response
     */
    public function editImage(Request $request, $id)
    {
        $image = $this->getDoctrine()
            ->getRepository(Image::class)
            ->find($id);

        if(!is_null($image)){
            $form = $this->createFormBuilder()
                ->add("name", TextType::class, ["label" => "Nume: ", "data" => $image->getName()])
                ->add("submit", SubmitType::class, ["label" => "Salveaza", "attr" => ["class" => "btn btn-success"]])
                ->getForm();
                
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $imageName = $form->get("name")->getData();
                $image->setName($imageName);

                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($image);
                $entityManager->flush();

                return $this->redirectToRoute("galerie_foto");
            }

            return $this->render("GalerieFoto.html.twig", [
                "uploads_directory" => "uploads/",
                "image" => $image,
                "form" => $form->createView(),
                "edit" => true
            ]);
        }
        else{
            return $this->redirectToRoute('galerie_foto');
        }
    }

    /**
     * @Route("/galerie_foto/delete/{id}", name="galerie_foto_delete")
     *
     * @return Response
     */
    public function deleteImage(Request $request, $id)
    {
        $image = $this->getDoctrine()
            ->getRepository(Image::class)
            ->find($id);

        if(!is_null($image)){
            if(!is_null($image->getOriginalName())){
                if (file_exists("uploads/".$image->getOriginalName()) && is_writable("uploads/".$image->getOriginalName())){
                    unlink ("uploads/".$image->getOriginalName());
                }
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($image);
            $entityManager->flush();
        }

        return $this->redirectToRoute('galerie_foto');
    }
}
