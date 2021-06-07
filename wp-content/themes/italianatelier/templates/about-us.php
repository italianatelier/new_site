<?php
/**Template Name: About us */
get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
?>

<section id="sec-about-intro" class="sec">
    <div class="container">
        <h1 class="font-title bold text-center main-tit">We breathe new life into luxury</h1>
        <div class="cont">
            Founded in 2008, Italian Atelier is a family-owned, family-run, third-generation design and luxury furniture agency. We are committed to bringing luxury to whoever is seeking it, with impeccable style and taste, by being the bridge between them and the finest Italian brands. Our portfolio of 38 luxury furniture brands includes Armani/Casa, Missoni Home, Wiener GTV Design, Poltronova, and Wall&decò among others.
        </div>
        <div class="img">
            <img src="<?php echo THEME_URL.'assets/images/about-intro.jpg'?>" alt="We breathe new life into luxury" />
        </div>
    </div>
</section>

<section id="sec-our-team">
    <div class="container">
        <div class="head-intro row sec-margin">
            <aside class="col-12 col-md-4">
                <h2 class="font-title bold main-tit">Meet Our Team</h2>
            </aside>
            <aside class="col-12 col-md-8 cont">
                Atelier people of industry experts with deep local comprehension are situated in Milan, Pistoia, Singapore, Shanghai, Mumbai, and Ho Chi Minh. With the vision of transitioning from Europe to Asia, we have entered some of the most demanding markets in the region. Our successful entry into the Asia Pacific market is the result of keeping our passion at heart, integrating global perspectives with local aspects, including ethnic differences, cultural codes, and market maturity, and most importantly, putting our customers at the core of our business.
            </aside>
        </div>
        <?php 
            $staffs_list = [
                'Board' => [
                    [
                        'Gianfranco Bianchi',
                        'CEO'
                    ],
                    [
                        'Jasmine Chau',
                        'CSO & CMO'   
                    ]
                    ],
                'Italy Team' => [
                    ['Jasmine Chau','CSO & CMO'],
                    ['Jasmine Chau','CSO & CMO'],
                    ['Jasmine Chau','CSO & CMO'],
                    ['Jasmine Chau','CSO & CMO'],
                    ['Jasmine Chau','CSO & CMO'],
                    ['Jasmine Chau','CSO & CMO'],
                ],
                'China Team' => [
                    ['Jasmine Chau','CSO & CMO'],
                    ['Jasmine Chau','CSO & CMO'],
                    ['Jasmine Chau','CSO & CMO'],
                ],
                'India Team' => [
                    ['Jasmine Chau','CSO & CMO'],
                    ['Jasmine Chau','CSO & CMO'],
                    ['Jasmine Chau','CSO & CMO'],
                ],
                'Vietnam Team' => [
                    ['Jasmine Chau','CSO & CMO'],
                    ['Jasmine Chau','CSO & CMO'],
                    ['Jasmine Chau','CSO & CMO'],
                ]

            ];
            $counter = 0;
        ?>
        <ul class="staffs-area">
            <?php foreach($staffs_list as  $group => $staffs):?>
            <li class="group row">
                <div class="col-12 col-md-4">
                    <h3 class="group-name font-title">
                        <?php echo $group;?>
                    </h3>
                </div>
                <div class="col-12 col-md-8">
                    <ul class="staffs row">
                        <?php foreach($staffs as $it):$counter++;?>
                        <li class="col-12 col-md-6">
                            <div class="item-staff sec-margin">
                                <div class="tmb">
                                    <img src="<?php echo THEME_URL.'assets/images/staff'.$counter.'.jpg'?>" alt="<?php $it[0];?>" />
                                </div>
                                <h4 class="name bold"><?php echo $it[0];?></h4>
                                <h5 class="pos font-weight-normal"><?php echo $it[1];?></h5>
                            </div>
                        </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </li>
            <?php endforeach;?>
        </ul>
    </div><!--container-->
</section>

<section id="sec-our-values">
    <div class="container">
        <h3 class="font-title main-tit">Our Values</h3>
        <ul class="slogans font-title text-right">
            <li class="it">
                <span class="color-main">Harness</span> your creation
            </li>
            <li class="it">
                <span class="color-main">Challenge</span> the status
            </li>
            <li class="it">
                <span class="color-main">Fulfil</span> your dreams
            </li>
            <li class="it">
                <span class="color-main">Innovate</span> to solve
            </li>
            <li class="it">
                <span class="color-main">Lifelong</span> education
            </li>
            <li class="it">
                <span class="color-main">Achievement</span> with conviction
            </li>
        </ul>
    </div>
</section>
<?php
endwhile; // End of the loop.

get_footer();
