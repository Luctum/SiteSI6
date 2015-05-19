<?php

class ControleurArticle {

  public function afficheArticle() {

      session_start();
    require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/header/menu.php';
    if(isset($_SESSION['login'])){
        require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/header/headerC.php';
      }
      else{
          require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/header/headerNC.php';
      }
    require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/modeles/article.php';
    require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/modeles/themes.php';
    $c_themes = new Theme();
    $theme = $c_themes->afficheTheme();
    $theme = $theme->fetchAll(PDO::FETCH_ASSOC);

    $articles = new Article();
    $ex = $articles->afficheConnaissance();
    $rows = $ex->fetchAll(PDO::FETCH_ASSOC);
    require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/contenu/articles/vue_article.php';
    require $_SERVER['DOCUMENT_ROOT'].'SITEBOUSILLE/vues/gabari.php';
  }
}
?>
