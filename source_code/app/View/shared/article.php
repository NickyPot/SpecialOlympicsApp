<!--
    *Footer
    *@author     Denis Suserts
    *@edit     Aleksy Ruszala
    *@version 2.0
-->

<style>
    .article {
        font-family: "Times New Roman", Times, serif;
        font-size: 1em;
    }

    .article-title {
        text-align: center;
    }

</style>
<div class="container ">
    <div class="row article-picture">
        <?php
        if ($data["media"] != null) {
            foreach ($data["media"] as $item) {
                echo '<img class="" src="' . $item["Image"] . '" alt="' . $item["Name"] . '" >';
            }
        }
        ?>
    </div>
    <div class="article-title">
        <?php
        echo '<h1>' . $data["article"]["Title"] . '</h1>';
        ?>
    </div>
    <div class="article-text">
        <?php
        echo '<text>' . $data["article"]["Body"] . '</text>';
        ?>

    </div>
</div>