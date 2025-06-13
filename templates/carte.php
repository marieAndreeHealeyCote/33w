                <?php
                /*
                * Template-part carte.php
                * Affiche une carte dans un conteneur flex
                  */
                ?>
                <?php
                // Cette fonction renvoie true si l’article en cours appartient à la catégorie spécifiée, ou à l’une de ses sous-catégories.
                if (in_category('galerie')):
                    echo "<article class='conteneur__galerie'>";
                    // Cette fonction permet d'afficher l'ensemble du contenu du post (article ou page)
                    the_content();
                    echo "</article>";
                else:
                ?>
                    <article class="conteneur__carte">
                        <?php
                        // affiche l'image "mise en avant" miniature
                        the_post_thumbnail('miniature');
                        ?>
                        <h2>
                            <?php
                            // affiche le titre principal du "post"
                            the_title();
                            ?>
                        </h2>
                        <p>
                            <?php
                            // Cette fonction permet de tronquer et d'afficher un permalien
                            $lien = ' [...] <a href="' . get_permalink() . '">Suite</a>';
                            echo '<p>' . wp_trim_words(get_the_excerpt(), 10, $lien) . '</p>';
                            ?>
                        </p>
                    </article>
                <?php endif; // if (in_category('galerie'))
