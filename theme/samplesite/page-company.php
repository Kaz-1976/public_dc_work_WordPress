<?php
/* Template Name: 会社概要 */
?>
<?php get_header(); ?>
<div id="cont_first" class="container">
    <div class="bread_list">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
    <div id="contents">
        <div id="cont_left">
            <h2>会社概要</h2>
            <table>
                <tr>
                    <th>会社名</th>
                    <td><?php the_field('add_company'); ?></td>
                </tr>
                <tr>
                    <th>本社</th>
                    <td>
                        <?php the_field('add_postal'); ?><br>
                        <?php the_field('add_address'); ?>
                    </td>
                </tr>
                <tr>
                    <th>設立</th>
                    <td><?php the_field('add_establishment'); ?></td>
                </tr>
                <tr>
                    <th>資本金</th>
                    <td><?php the_field('add_capital'); ?></td>
                </tr>
                <tr>
                    <th>従業員数</th>
                    <td><?php the_field('add_member'); ?></td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td><?php the_field('add_tel'); ?></td>
                </tr>
                <tr>
                    <th>代表者</th>
                    <td><?php the_field('add_delegate'); ?></td>
                </tr>
            </table>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<div id="pageTop">
    <a href="#">PAGE TOP</a>
</div>
<?php get_footer(); ?>