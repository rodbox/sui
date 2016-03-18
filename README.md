# Sui
Adapte simplement le context d'interface utilisateur en fonction de son besoin
et le stock en session.
Créez autant de contexte que l'on souhaite en les paramétrants dans le fichier dist/sui.less.
Et en intégrant un <?php sui_btn('NOM DU CONTEXTE SUI'); ?>

```
dans mon html
<?php sui_btn('NOM_DU_CONTEXTE_SUI'); ?>
```

et le fichier LESS :
```
// FOOTER OPEN
[data-sui-NOM_DU_CONTEXTE_SUI="true"]{

    // paramétrage css dans mon contexte

    .sui-footer{
        .transY(0px);
    }
    .sui-default,
    .sui-sidebar,
    .sui-quickbar{
        height: @HFooter;
    }
}

```