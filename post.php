<?php
    include_once('modelos/header.php');

    if(isset($_GET['id'])){ // Verifica se o parâmetro 'id' está presente na URL

        $postId = $_GET['id'];  // Atribui o valor do parâmetro 'id' a uma variável chamada $postId
        $pesquisarPost; 
        // Declara uma variável $pesquisarPost para armazenar o post atual

        foreach($posts as $post){ // Percorre todos os posts no array $posts

            if($post['id'] == $postId){    // Verifica se o ID do post atual é igual ao ID passado na URL
                $pesquisarPost = $post;  // Se houver uma correspondência, atribui o post atual a $pesquisarPost
            }
        }
    }

?>
<main id="post-container">
    <div class="content-conteiner">
        <h1 id="main-title"><?= $pesquisarPost['title'] ?></h1>
        <p id="post-description"><?=$pesquisarPost['description']?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/image/<?= $pesquisarPost['img']?>" alt="">
        </div>
        <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil, consequatur. Nisi praesentium obcaecati animi non veritatis accusamus unde aliquam dignissimos reprehenderit tempora. Quo architecto fugit illo nesciunt mollitia aspernatur blanditiis?
        Dicta, beatae ullam ab corrupti sapiente aperiam. Quae odio, nemo asperiores quidem eveniet reiciendis repellendus velit maiores ea fuga consequatur earum inventore, officiis autem aperiam unde sint ipsam ex aut!
        Et impedit earum sunt quis necessitatibus, dicta similique quas, numquam laborum nulla rem non voluptatibus deserunt vel molestias facilis, in ab quasi a provident obcaecati labore omnis doloremque laboriosam? Repudiandae!
        Culpa magni quas autem nostrum incidunt exercitationem corporis! Maxime velit, omnis non soluta sunt, quasi voluptas maiores eos saepe exercitationem dicta similique officiis architecto, excepturi eum. Qui blanditiis asperiores praesentium?
        Sunt necessitatibus rerum aliquid rem dolorem? Excepturi vel eos, ex pariatur cum aut. Amet soluta iusto ratione unde corporis, cum ullam? Nulla neque aperiam excepturi harum eaque accusantium officia facilis.</p>
        <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil, consequatur. Nisi praesentium obcaecati animi non veritatis accusamus unde aliquam dignissimos reprehenderit tempora. Quo architecto fugit illo nesciunt mollitia aspernatur blanditiis?
        Dicta, beatae ullam ab corrupti sapiente aperiam. Quae odio, nemo asperiores quidem eveniet reiciendis repellendus velit maiores ea fuga consequatur earum inventore, officiis autem aperiam unde sint ipsam ex aut!
        Et impedit earum sunt quis necessitatibus, dicta similique quas, numquam laborum nulla rem non voluptatibus deserunt vel molestias facilis, in ab quasi a provident obcaecati labore omnis doloremque laboriosam? Repudiandae!
        Culpa magni quas autem nostrum incidunt exercitationem corporis! Maxime velit, omnis non soluta sunt, quasi voluptas maiores eos saepe exercitationem dicta similique officiis architecto, excepturi eum. Qui blanditiis asperiores praesentium?
        Sunt necessitatibus rerum aliquid rem dolorem? Excepturi vel eos, ex pariatur cum aut. Amet soluta iusto ratione unde corporis, cum ullam? Nulla neque aperiam excepturi harum eaque accusantium officia facilis.</p>
    </div>
    <aside id="nav-container">
    <h3 id="tags-title">tags</h3>
    <ul class="tags-list">
        <?php foreach($pesquisarPost['tags'] as $tag): ?>
            <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
    <?php foreach($categories as $categorie): ?>
            <li><a href="#"><?= $categorie ?></a></li>
            <?php endforeach; ?>
    </ul>
</aside>
</main> 

<?php
    include_once('modelos/footer.php');
?>
