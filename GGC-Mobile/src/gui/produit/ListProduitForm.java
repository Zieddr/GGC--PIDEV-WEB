/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package gui.produit;

import com.codename1.components.MultiButton;
import com.codename1.components.SpanLabel;
import com.codename1.ui.Button;
import com.codename1.ui.Component;
import com.codename1.ui.Container;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.layouts.BoxLayout;
import entities.Produit;
import java.util.ArrayList;
import services.ServiceProduit;

/**
 *
 * @author dell
 */
public class ListProduitForm extends Form {

    public ListProduitForm(Form previous) {
        setTitle("List Product");

        Container List = new Container(BoxLayout.y());

        for (Produit p : ServiceProduit.getInstance().getAllProducts()) {
            MultiButton mb = new MultiButton(p.toString());
            //System.out.println(user.getId());
            Button update = new Button("update");
            update.setUIID("update");
            update.addActionListener(e -> new ModifierProduit(p,previous).show());
            Button delete = new Button("delete");
            delete.setUIID("delete");
            // delete.addActionListener(e -> new DeleteProduct(p,previous).show());

            add(mb);
            add(delete);
            add(update);

        }
        /* *** *SEARCHBAR* *** */
        getToolbar().addSearchCommand(e -> {
            String text = (String) e.getSource();
            if (text == null || text.length() == 0) {
                // clear search
                for (Component cmp : getContentPane()) {
                    cmp.setHidden(false);
                    cmp.setVisible(true);
                }
                getContentPane().animateLayout(150);
            } else {
                text = text.toLowerCase();
                for (Component cmp : getContentPane()) {
                    MultiButton mb = (MultiButton) cmp;
                    String line1 = mb.getTextLine1();
                    String line2 = mb.getTextLine2();
                    boolean show = line1 != null && line1.toLowerCase().indexOf(text) > -1
                            || line2 != null && line2.toLowerCase().indexOf(text) > -1;
                    mb.setHidden(!show);
                    mb.setVisible(show);

                }
                getContentPane().animateLayout(150);
            }
        }, 4);

//        SpanLabel sp = new SpanLabel();
//        sp.setText(ServiceProduct.getInstance().getAllProduct().toString());
//        add(sp);
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> previous.showBack());
    }

}