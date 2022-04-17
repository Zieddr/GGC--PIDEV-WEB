<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'app_admin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin/']], [], []],
    'app_admin_pubarchive' => [[], ['_controller' => 'App\\Controller\\AdminController::forumArchive'], [], [['text', '/admin/forum/archive']], [], []],
    'app_admin_pubnonarchive' => [[], ['_controller' => 'App\\Controller\\AdminController::forumNonArchive'], [], [['text', '/admin/forum/NonArchive']], [], []],
    'app_forum_archive' => [['idpublication'], ['_controller' => 'App\\Controller\\AdminController::archiver'], [], [['variable', '/', '[^/]++', 'idpublication'], ['text', '/admin/forum']], [], []],
    'app_avis_index' => [[], ['_controller' => 'App\\Controller\\AvisController::index'], [], [['text', '/avis/']], [], []],
    'app_avis_new' => [['reference'], ['_controller' => 'App\\Controller\\AvisController::new'], [], [['text', '/new'], ['variable', '/', '[^/]++', 'reference'], ['text', '/avis']], [], []],
    'app_avis_show' => [['idavis'], ['_controller' => 'App\\Controller\\AvisController::show'], [], [['variable', '/', '[^/]++', 'idavis'], ['text', '/avis']], [], []],
    'app_avis_edit' => [['reference', 'idavis'], ['_controller' => 'App\\Controller\\AvisController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idavis'], ['variable', '/', '[^/]++', 'reference'], ['text', '/avis']], [], []],
    'app_avis_delete' => [['idavis'], ['_controller' => 'App\\Controller\\AvisController::delete'], [], [['variable', '/', '[^/]++', 'idavis'], ['text', '/avis']], [], []],
    'app_commande_index' => [[], ['_controller' => 'App\\Controller\\CommandeController::index'], [], [['text', '/commande/']], [], []],
    'app_commande_new' => [[], ['_controller' => 'App\\Controller\\CommandeController::new'], [], [['text', '/commande/new']], [], []],
    'app_commande_show' => [[], ['_controller' => 'App\\Controller\\CommandeController::show'], [], [['text', '/commande/show']], [], []],
    'app_commande_edit' => [['idcommande'], ['_controller' => 'App\\Controller\\CommandeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idcommande'], ['text', '/commande']], [], []],
    'app_commande_delete' => [['idcommande'], ['_controller' => 'App\\Controller\\CommandeController::delete'], [], [['variable', '/', '[^/]++', 'idcommande'], ['text', '/commande']], [], []],
    'app_commande_livree' => [['idcommande'], ['_controller' => 'App\\Controller\\CommandeController::Livree'], [], [['text', '/livree'], ['variable', '/', '[^/]++', 'idcommande'], ['text', '/commande']], [], []],
    'app_commentaire_edit' => [['idpublication', 'idcommentaire'], ['_controller' => 'App\\Controller\\CommentaireController::edit'], [], [['text', '/modif'], ['variable', '/', '[^/]++', 'idcommentaire'], ['variable', '/', '[^/]++', 'idpublication'], ['text', '/forum']], [], []],
    'app_commentaire_delete' => [['idcommentaire'], ['_controller' => 'App\\Controller\\CommentaireController::delete'], [], [['variable', '/', '[^/]++', 'idcommentaire'], ['text', '/forum']], [], []],
    'app_home_page' => [[], ['_controller' => 'App\\Controller\\HomePageController::index'], [], [['text', '/']], [], []],
    'app_lignecommande_index' => [[], ['_controller' => 'App\\Controller\\LignecommandeController::index'], [], [['text', '/lignecommande/']], [], []],
    'app_lignecommande_show' => [['idcommande'], ['_controller' => 'App\\Controller\\LignecommandeController::show'], [], [['variable', '/', '[^/]++', 'idcommande'], ['text', '/lignecommande']], [], []],
    'app_lignecommande_edit' => [['idligne'], ['_controller' => 'App\\Controller\\LignecommandeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idligne'], ['text', '/lignecommande']], [], []],
    'app_lignecommande_delete' => [['idligne'], ['_controller' => 'App\\Controller\\LignecommandeController::delete'], [], [['variable', '/', '[^/]++', 'idligne'], ['text', '/lignecommande']], [], []],
    'app_livraison_index' => [[], ['_controller' => 'App\\Controller\\LivraisonController::index'], [], [['text', '/livraison/']], [], []],
    'app_livraison_new' => [[], ['_controller' => 'App\\Controller\\LivraisonController::new'], [], [['text', '/livraison/new']], [], []],
    'app_livraison_show' => [['idcommande'], ['_controller' => 'App\\Controller\\LivraisonController::show'], [], [['variable', '/', '[^/]++', 'idcommande'], ['text', '/livraison']], [], []],
    'app_livraison_edit' => [['idcommande'], ['_controller' => 'App\\Controller\\LivraisonController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idcommande'], ['text', '/livraison']], [], []],
    'app_livraison_delete' => [['idcommande'], ['_controller' => 'App\\Controller\\LivraisonController::delete'], [], [['variable', '/', '[^/]++', 'idcommande'], ['text', '/livraison']], [], []],
    'app_livraison_excuse' => [['idcommande'], ['_controller' => 'App\\Controller\\LivraisonController::excuse'], [], [['text', '/excuse'], ['variable', '/', '[^/]++', 'idcommande'], ['text', '/livraison']], [], []],
    'panier_index' => [[], ['_controller' => 'App\\Controller\\PanierController::index'], [], [['text', '/panier/']], [], []],
    'panier_add' => [['id'], ['_controller' => 'App\\Controller\\PanierController::add'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/panier/add']], [], []],
    'panier_edit' => [['idcommande'], ['_controller' => 'App\\Controller\\PanierController::edit'], [], [['variable', '/', '[^/]++', 'idcommande'], ['text', '/panier/edit']], [], []],
    'panier_remove' => [['id'], ['_controller' => 'App\\Controller\\PanierController::remove'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/panier/remove']], [], []],
    'panier_delete' => [['id'], ['_controller' => 'App\\Controller\\PanierController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/panier/delete']], [], []],
    'panier_delete_all' => [[], ['_controller' => 'App\\Controller\\PanierController::deleteAll'], [], [['text', '/panier/delete']], [], []],
    'app_produit_index' => [[], ['_controller' => 'App\\Controller\\ProduitController::index'], [], [['text', '/produit/']], [], []],
    'app_produit_shop' => [[], ['_controller' => 'App\\Controller\\ProduitController::shop'], [], [['text', '/produit/shop']], [], []],
    'app_produit_new' => [[], ['_controller' => 'App\\Controller\\ProduitController::new'], [], [['text', '/produit/new']], [], []],
    'app_produit_show' => [['reference'], ['_controller' => 'App\\Controller\\ProduitController::show'], [], [['variable', '/', '[^/]++', 'reference'], ['text', '/produit']], [], []],
    'app_produit_details' => [['reference'], ['_controller' => 'App\\Controller\\ProduitController::details'], [], [['variable', '/', '[^/]++', 'reference'], ['text', '/produit/details']], [], []],
    'app_produit_edit' => [['reference'], ['_controller' => 'App\\Controller\\ProduitController::edit'], [], [['variable', '/', '[^/]++', 'reference'], ['text', '/produit/edit']], [], []],
    'app_produit_delete' => [['reference'], ['_controller' => 'App\\Controller\\ProduitController::delete'], [], [['variable', '/', '[^/]++', 'reference'], ['text', '/produit/delete']], [], []],
    'app_produit_note' => [['reference'], ['_controller' => 'App\\Controller\\ProduitController::excuse'], [], [['text', '/note'], ['variable', '/', '[^/]++', 'reference'], ['text', '/produit']], [], []],
    'app_produit_remise' => [[], ['_controller' => 'App\\Controller\\ProduitController::RemiseAffecter'], [], [['text', '/produit/remise']], [], []],
    'app_produit_search' => [[], ['_controller' => 'App\\Controller\\ProduitController::Recherche'], [], [['text', '/produit/search']], [], []],
    'app_produit_pdf' => [['reference'], ['_controller' => 'App\\Controller\\ProduitController::PdfListeProduits'], [], [['text', '//pdf'], ['variable', '/', '[^/]++', 'reference'], ['text', '/produit']], [], []],
    'app_publication_index' => [[], ['_controller' => 'App\\Controller\\PublicationController::index'], [], [['text', '/forum/']], [], []],
    'app_publication_show' => [['idpublication'], ['_controller' => 'App\\Controller\\PublicationController::show'], [], [['text', '/activity'], ['variable', '/', '[^/]++', 'idpublication'], ['text', '/forum']], [], []],
    'app_publication_edit' => [['idpublication'], ['_controller' => 'App\\Controller\\PublicationController::edit'], [], [['text', '/modification'], ['variable', '/', '[^/]++', 'idpublication'], ['text', '/forum']], [], []],
    'app_publication_delete' => [['idpublication'], ['_controller' => 'App\\Controller\\PublicationController::delete'], [], [['variable', '/', '[^/]++', 'idpublication'], ['text', '/forum']], [], []],
    'app_vote_up' => [['idpublication'], ['_controller' => 'App\\Controller\\VoteController::upvote'], [], [['text', '/upvote'], ['variable', '/', '[^/]++', 'idpublication'], ['text', '/forum']], [], []],
    'app_vote_down' => [['idpublication'], ['_controller' => 'App\\Controller\\VoteController::downvote'], [], [['text', '/downvote'], ['variable', '/', '[^/]++', 'idpublication'], ['text', '/forum']], [], []],
    'ef_connect' => [['instance', 'homeFolder'], ['_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::load', 'instance' => 'default', 'homeFolder' => ''], [], [['variable', '/', '[^/]++', 'homeFolder'], ['variable', '/', '[^/]++', 'instance'], ['text', '/efconnect']], [], []],
    'ef_main_js' => [[], ['_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::mainJS'], [], [['text', '/elfinder.main.js']], [], []],
    'elfinder' => [['instance', 'homeFolder'], ['_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::show', 'instance' => 'default', 'homeFolder' => ''], [], [['variable', '/', '[^/]++', 'homeFolder'], ['variable', '/', '[^/]++', 'instance'], ['text', '/elfinder']], [], []],
];
