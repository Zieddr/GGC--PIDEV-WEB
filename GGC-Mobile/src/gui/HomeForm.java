/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package gui;

import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.spinner.Picker;
import com.codename1.ui.util.Resources;

/**
 *
 * @author Mr
 */
public class HomeForm extends Form {

    public Resources theme;
    Form current;

    /*Garder traçe de la Form en cours pour la passer en paramètres 
    aux interfaces suivantes pour pouvoir y revenir plus tard en utilisant
    la méthode showBack*/

    public HomeForm() {
        current = this; //Récupération de l'interface(Form) en cours
        setTitle("Sign in");
        setLayout(BoxLayout.y());

        TextField address = new TextField("", "E-Mail", 40, TextArea.EMAILADDR);
        TextField password = new TextField("", "Password", 30, TextField.PASSWORD);
        Button connect = new Button("Se Connecter");
        addAll(address, password, connect);

        //Tester asresse et password
        connect.addActionListener((connexion) -> {
            if (address.getText().equals("admin") && password.getText().equals("admin")) {
                //adresse et mot de passe valide welcome menu
                Form menuForm = new Form("Menu", BoxLayout.y());
                menuForm.getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, (e) -> {
                    showBack();
                });

                Toolbar tb = menuForm.getToolbar();
                //Image logo = theme.getImage("LogoGGC.png");
                //logo.scaledSmallerRatio(10 , 10);
             //   Container topBar = BorderLayout.east(new Label(logo));
                //topBar.add(BorderLayout.SOUTH, new Label("Cool App Tagline...", "SidemenuTagline"));
                //  topBar.setUIID("SideCommand");
             //   tb.addComponentToSideMenu(topBar);
                menuForm.getToolbar().addMaterialCommandToRightBar("Déconnexion", FontImage.MATERIAL_LOGOUT, (evt4) -> {
                    address.setText("");
                    password.setText("");
                    showBack();

                });

                //remplir les modules            
                menuForm.getToolbar().addCommandToSideMenu("Gestion des utilisateurs", null, (gu) -> {

                });
                menuForm.getToolbar().addCommandToSideMenu("Gestion des modérateurs", null, (gm) -> {

                });
                menuForm.getToolbar().addCommandToSideMenu("Gestion du forum", null, (gf) -> {

                });
                menuForm.getToolbar().addCommandToSideMenu("Gestion des produits", null, (gp) -> {
                    
                });
                menuForm.getToolbar().addCommandToSideMenu("Gestion des livraisons", null, (gl) -> {
                    //new ListLivraisons().show();
                });

                menuForm.show();

            } else {
                Dialog.show("Warning", "Invalid login or password!", "OK", null);

            }
        });

    }
}
