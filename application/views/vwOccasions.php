<?php
$this->load->view('vwHeader');
?>

<link href="<?php echo HTTP_CSS_PATH; ?>starter-template.css" rel="stylesheet">
<link href="<?php echo HTTP_CSS_PATH; ?>occasions.css" rel="stylesheet">
<link href="<?php echo HTTP_CSS_PATH; ?>bootstrap.min.css" rel="stylesheet">



<div class="page-header container">
    <h1><small>Special Occasions</small></h1>

    <div>
        <p>We can make your occasion a memorable one. Our location, coupled with the very best of foods, beverages and our excellent service makes it the ideal location for any special event you have in mind.</p>
        <img src="<?php echo HTTP_IMAGES_PATH; ?>banq_banner.jpg">

        <div>
            <h2><small>Diamond</small></h2>
            <p>Diamond room is the ideal location for you to have your cooperate get-togethers and cocktails. The location can comfortably accomodate 100 people and if you are looking for an ideal venue to support your small wedding reception, this is the place.</p>
        </div>
        <div class="seating_details">
            <table border="0" cellpadding="0" cellspacing="5" class="seating_table">
                <tr>
                    <th>Dimensions</th>
                    <th>Dimensions squared</th>
                    <th>Height </th>
                    <th>Maximum Seating Arrangements </th>
                </tr>
                <tr>
                    <td>25’9’ x 25</td>
                    <td>644</td>
                    <td>8.3</td>
                    <td class="seating_text" rowspan="2">
                        <span class="seating_name"> Banquet: </span><span class="seating_number">70</span><br />
                        <span class="seating_name"> Cocktail: </span><span class="seating_number">100</span><br />
                    </td>
                </tr>
                <tr>
                    <td>7.90 x 7.60</td>
                    <td>60</td>
                    <td>2.5</td>
                </tr>
            </table>
        </div>

        <div>
            <h2><small>Ivy</small></h2>
            <p>Ivy room is designed specially to suit every occasion and can accommodate up to 250 guests. This is the ideal venue for your wedding, cocktail party or banquet. If you are willing to have your special event in the most luxurious surroundings this venue is for you.</p>
        </div>
        <div  class="seating_details">
            <table border="0" cellpadding="0" cellspacing="5" class="seating_table">
                <tr>
                    <th>Dimensions</th>
                    <th>Dimensions squared</th>
                    <th>Height </th>
                    <th>Maximum Seating Arrangements </th>
                </tr>
                <tr>
                    <td>112 X 23</td>
                    <td>2576</td>
                    <td>9.9</td>
                    <td class="seating_text" rowspan="2">
                        <span class="seating_name"> Banquet: </span><span class="seating_number">250</span><br />
                        <span class="seating_name"> Cocktail: </span><span class="seating_number">350</span><br />
                    </td>
                </tr>
                <tr>
                    <td>34.1 X 7</td>
                    <td>239</td>
                    <td>3</td>
                </tr>
            </table>
        </div>

        <div>
            <h2><small>Nightshade</small></h2>
            <p>If your personality is of a free spirit an open air event is what suits you the best. If you want to have your reception under the stars, our rooftop provides the perfect surrounding for it. Have your wedding with the light breeze of the evening wind. No other venue matches a free spirited personality like this one.</p>
        </div>
        <div class="seating_details">
            <table border="0" cellpadding="0" cellspacing="5" class="seating_table">
                <tr>
                    <th>Dimensions</th>
                    <th>Dimensions squared</th>
                    <th>Height </th>
                    <th>Maximum Seating Arrangements </th>
                </tr>
                <tr>
                    <td>30 x 40</td>
                    <td>1200</td>
                    <td> - </td>
                    <td class="seating_text" rowspan="2">
                        <span class="seating_name"> Banquet: </span><span class="seating_number">120</span><br />
                        <span class="seating_name"> Cocktail: </span><span class="seating_number">180</span><br />
                    </td>
                </tr>
                <tr>
                    <td>7.90 x 7.60</td>
                    <td>60</td>
                    <td>2.5</td>
                </tr>
            </table>
        </div>
    </div>
    <div>
        <div style="height: 30px; width: 100%; float: left; background-color: #ffffff" ></div>
        <p>Excited to know our prices? Why don't you generate a quotation and see our amazing prices?</p>
        <a href="<?php echo base_url(); ?>quotation" class="btn btn-info" role="button">Generate Quotation</a>
    </div>
</div>

<?php
$this->load->view('vwFooter');
?>