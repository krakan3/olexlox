    <section id="border">
        <div class="border">
            <p class="first">NEW SEASON ARRIVALS.</p>
            <p>CHECH OUT ALL THE NEW TRENDS</p>
            <button>SHOP NOW</button>
        </div>
    </section> 
    <section id="clothes">
        <p class="title">Our Blog</p>
        <div class="merch">                  
                <?php for ($i = 1; $i <4; $i++): ?>                                          <!-- цикл открыт-->
                    <div  class="unit">
                        <a href="single-merch.php">
                        <div class="backside">
                            <img src="/public/images/merch.jpg" class="back__img">
                            <p class="price">Ничего не произошло</p>
                        </div>
                        <div class="frontside">
                            <img src="/public/images/merch.jpg" class="front__img">
                            <p class="name">Новость номер <?=$i ?></p>
                        </div>
                        </a>
                    </div>
                    <?php endfor; ?> <!-- цикл закрыт-->
                </div>
                </div>
    </section>