 

<style>
.owl-carousel.owl-drag .owl-item {
    min-height: 260px;
}
</style>

<section id="firmalar">
    <div style="background: rgba(0,0,0,0.84);">
        <h2 style="margin: 0; padding-top: 10px;padding-bottom: 10px; font-family: 'Oswald', sans-serif;" class="text-center  text-white">Hizmet Verdiğim Firmalar</h2>
    </div>
    <div class="owl-carousel owl-theme">
        <?php 
        while ($firmalarcek=$firmalarsor->fetch(PDO::FETCH_ASSOC)) { 

            if ($firmalarcek['firmalar_durum']==1) { ?>
                <div class="item"><a href="<?php echo $firmalarcek['firmalar_url']; ?>"><img class="img-fluid" style="max-width: 200px; max-height: 200px; " src="<?php echo $firmalarcek['firmalar_logo']; ?>" alt="<?php echo $firmalarcek['firmalar_isim']; ?>"></a></div>
         <?php   } } ?>


    </div>
</section>