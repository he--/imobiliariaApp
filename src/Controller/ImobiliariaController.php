<?php


namespace App\Controller;


use App\Forms\UsuarioType;
use Doctrine\ORM\EntityManager;
use App\Entity\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ImobiliariaController extends AbstractController
{
    /**
     * @Route("index", name="index")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
//        $em = $this->getDoctrine()->getManager();
//
//        $usuario = new Usuario();
//        $usuario->setCpfCnpj('03208260407');
//        $usuario->setNome('Hélio Cardoso Rodrigues de Souza');
//        $usuario->setDtCadastro(new \DateTime());
//        $usuario->setDtNascimento(new \DateTime());
//
//        $em->persist($usuario);
//        $em->flush();

//        $user = $this->getUser();

        $form = $this->createForm(UsuarioType::class);
//        $form->handleRequest($request);

//        if ($form->isSubmitted() && $form->isValid()) {
//
//            return $this->redirectToRoute('user_edit');
//        }

        return $this->render('index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}