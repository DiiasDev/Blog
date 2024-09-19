<?php
    include_once('modelos/header.php');
?>
<main>
    <div id="title-container">
        <h1>Blog Codar</h1>
        <p>O seu blog de programação</p>
    </div>
    <div id="posts-container">
        <?php foreach($posts as $post): ?>
            <div class="post-box">
                <img src="<?= $BASE_URL?>/image/<?= $post['img']?>" alt="<?= $post['title'] ?>">  <!--esta dentro do loop, fazendo com que adicione todas as imagens da array no conteudo do blog, por acessar o $post['img'] -->
                <h2 class="post-title">
                    <a href="<?= $BASE_URL?>post.php?id=<?= $post['id']?>"><?= $post['title'] ?></a><!--esta dentro do loop, fazendo com que adicione todos os titulos do array no conteudo do blog, por acessar o $post['title'] -->
                </h2>
                <p class="post-description"> <?= $post['description']?></p> <!--esta dentro do loop, fazendo com que adicione todas as descrições da array no conteudo do blog, por acessar o $post['description'] -->
                <div class="tags-container">
                    <?php foreach($post['tags'] as $tag): ?>
                        <a href="#"><?= $tag ?></a>
                        <?php endforeach ?>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</main>
<?php
    include_once("modelos/footer.php");
?>