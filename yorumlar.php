<style>
.owl-dots {
    display: none;
}
</style>

<section>
    <div style="background: rgba(0,0,0,0.84);">
        <h2 style="margin: 0; padding-top: 10px;padding-bottom: 10px; font-family: 'Oswald', sans-serif;" class="text-center  text-white">Sizden Gelen Yorumlar</h2>
    </div>
    <div id="yorumlar" class="owl-carousel owl-theme">
        <?php 

        while ($yorumlarcek=$yorumlarsor->fetch(PDO::FETCH_ASSOC)) { 

           
            ?>




            <div class="item">
                <div style="margin: auto; height: 150px; width: 150px;" class="resim">
                    <img  src="<?php echo $yorumlarcek['kullanici_resim']; ?>" alt="Profil Resim" class="rounded-circle">
                </div>
                <div class="yazi">
                    <p style="background: #FB4444; color:white; border-radius: 10px; " class="m-4 p-4"><?php echo $yorumlarcek['yorumlar_metin'] ?></p>
                </div>
            </div>



        <?php  }  ?>
    </div>
</section>

