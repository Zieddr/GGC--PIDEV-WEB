<?php

namespace App\services\JSON;

use App\Entity\Publication;
use App\Form\CommentaireType;
use App\Form\PublicationType;
use App\Repository\ClientRepository;
use App\Repository\CommentaireRepository;
use App\Repository\ProduitRepository;
use App\Repository\PublicationRepository;
use App\Repository\VoteRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/JSON/produit")
 */
class ProduitService extends AbstractController
{
    /**
     * @Route("/getAll", name="AllProducts")
     * @throws ExceptionInterface
     */
    public function AllProducts(NormalizerInterface $normalizer, ProduitRepository $produitRepository): Response
    {
        $products = $produitRepository->findAllProducts();
        $produits = array();
        foreach ($products as $p) {

            $produit = (array)$p;
            foreach ($produit as $k => $v) {
                $newkey = substr($k, 20);
                $produit[$newkey] = $produit[$k];
                unset($produit[$k]);
            }
            $produits[] = $produit;

        }

        $jsonContent = $normalizer->normalize($produits, 'json', ['groups' => 'post: read']);
        return new Response (json_encode($jsonContent));
    }

    /**
     * @Route("/get/{reference}", name="getProduit")
     * @throws ExceptionInterface
     */
    public function getProduit(Request $request, $reference, ProduitRepository $produitRepository, NormalizerInterface $normalizer)
    {
        $produit = $produitRepository->find($reference);
        $product = (array)$produit;
        foreach ($product as $k => $v) {
            $newkey = substr($k, 20);
            $product[$newkey] = $product[$k];
            unset($product[$k]);
        }

        $jsonContent = $normalizer->normalize($product, 'json', ['groups' => 'post: read']);

        return new Response (json_encode($jsonContent));
    }

    /**
     *  @Route("/edit/{id}", name="editProduit")
     */
    public function editProduit (Request $request, NormalizerInterface $Normalizer, $reference,ProduitRepository $produitRepository)
    {
        $produit = $produitRepository->find($reference);

        $produit->setReference($request->get('reference'));
        $produit->setLibelle($request->get('libelle'));
        $produit->setCategorie($request->get('categorie'));
        $produit->setDescritption($request->get('description'));
        $produit->setPrix($request->get('prix'));
        $produitRepository->add($produit);

        $jsonContent = $Normalizer->normalize($produit, 'json', ['groups' => 'post: read']);
        return new Response ("Information updated successfully".json_encode($jsonContent));
    }

}