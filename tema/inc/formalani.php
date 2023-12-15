<div class="d-inline-block w-100 margin-45px-bottom sm-margin-25px-bottom">
    <form action="<?php echo URL.'search/';?>" method="post"  class="position-relative">
        <div class="position-relative">
            <input name="searh" type="text" placeholder="<?php echo $blokRowdil["desc20"]; ?>" class="bg-transparent padding-40px-right text-small mb-0 border-color-extra-light-gray medium-input float-start">
            <button type="submit" class="bg-transparent btn position-absolute right-0 top-1 search-button"><i class="fas fa-search ms-0"></i></button>
        </div>
    </form>
</div>
<div class="margin-45px-bottom sm-margin-25px-bottom">
    <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span><?php echo $blokRowdil["desc22"]; ?></span></div>
    <ul class="list-style-6 margin-50px-bottom text-small">
        <?php
        $haberQuery = $db->query("SELECT * FROM haberkategori WHERE kategori_durum=1 ORDER BY kategori_id DESC");
        if( $haberQuery->rowCount() ){
        foreach($haberQuery as $haberRow){
        $porid = $haberRow["kategori_id"];
        $sayac = $db->query("SELECT COUNT(*) as count FROM sayfalar WHERE portkat='$porid'")->fetch(PDO::FETCH_ASSOC);
        $haberUrl = LURL."haberkategori/".$haberRow["kategori_id"]."/".$haberRow["kategori_url"];
        ?>
        <li><a href="<?php echo $haberUrl; ?>"><?php echo $haberRow[$lehce."kategori_adi"];?></a><span><?php echo $sayac["count"]; ?></span></li>
        <?php
        }
        }?>
    </ul>
</div>
<div class="margin-45px-bottom sm-margin-25px-bottom">
    <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span><?php echo $blokRowdil["baslik23"]; ?></span></div>
    <ul class="latest-post position-relative">
        <?php
        $haberQuery = $db->query("SELECT * FROM sayfalar WHERE sayfa_durum=1 AND secenekHaber=1 ORDER BY sayfa_id DESC LIMIT 5");
        if( $haberQuery->rowCount() ){
        foreach($haberQuery as $haberRow){
        $haberUrl = LURL.$haberRow["sayfa_url"].'/';
        ?>
        <li class="media d-flex">
            <figure class="flex-shrink-0">
                <a href="<?php echo $haberUrl; ?>"><img src="<?php echo URL.'images/sayfalar/big/'.$haberRow["sayfa_resim"];?>" alt=""></a>
            </figure>
            <div class="media-body flex-grow-1 text-small"><a href="<?php echo $haberUrl; ?>" class="text-extra-dark-gray"><span class="d-block margin-5px-bottom"><?php echo $haberRow[$lehce."sayfa_adi"];?></span></a> <span class="d-block text-medium-gray text-small"><?php echo tarih($haberRow["sayfa_tarih"]);?><</span></div>
        </li>
        <?php
        }
        }?>
        
    </ul>
</div>