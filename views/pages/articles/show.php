<div class="article_section">
    <div id="article_container">
        <div class="article_container_img">
            <img src="https://images.pexels.com/photos/1761282/pexels-photo-1761282.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Great Adventure" style="width: 100%; height: 100%;">
        </div>

        <div class="article_container_content">
            <div class="the">
                <div class="line"></div>
                <h4>the</h4>
                <div class="line"></div>
            </div>
            <h1 class="article_title"><?php echo $article_data[0]['article_title']; ?></h1>
            <div class="divider"></div>
            <p class="article_body"><?php echo $article_data[0]['article_content']; ?></p>

            <div class="perfil">
                <img src="../../views/dist/img/publisher.png" class="img-2 rounded" />
                <div class="datos">
                    <h3 class="publisher"><?php echo $publisher_name; ?></h3>
                    <p class="p-2"><?php echo $article_data[0]['publishing_date']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>