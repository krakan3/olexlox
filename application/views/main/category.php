    <section id="border">
        <div class="border">
            <p class="first">NEW SEASON ARRIVALS.</p>
            <p>CHECH OUT ALL THE NEW TRENDS</p>
            <button>SHOP NOW</button>
        </div>
    </section> 
    <section id="clothes">
        <p class="title">Check out our men clothes</p>
        <div class="merch">                  
                <?php
                 for ($i = 0; $i <3; $i++): 
                ?>                                          <!-- цикл открыт-->
                    <div  class="unit">
                        <a href="single-merch.php">
                        <div class="backside">
                            <img src="/public/images/merch.jpg" class="back__img">
                            <p class="price">10$</p>
                        </div>
                        <div class="frontside">
                            <img src="/public/images/merch.jpg" class="front__img">
                            <p class="name">Black</p>
                        </div>
                        </a>
                    </div>
                    <?php endfor; ?> <!-- цикл закрыт-->
                </div>
                </div>
    </section>