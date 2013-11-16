<?php
/*
  Template Name Posts: Feature: A Visit From St. Nicholas
*/
?>

<?php get_header(); ?>

<?php get_template_part('content', 'header'); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
  
    <?php $custom_classes = get_post_meta($post->ID, 'custom_post_class', false);  ?>

    <div class="main" role="main">
    
      <div class="content">
    
        <article <?php post_class($custom_classes); ?> id="post-<?php the_ID(); ?>" role="article">
        
          <header class="entry-header">
            <?php yuleblog_feature_header(); ?>
          </header>
          
          <div class="article-text">
            <?php the_content(); ?>
          </div>
          
        </article>
      
      </div>
      
      <div class="poem">
        
        <div class="poem-text">
      
          
          
          <h2><span class="old">An Account of A Visit from St. Nicholas</span><span class="new">'Twas the Night Before Christmas</span></h2>
          
          <p>&#8216;Twas the night before Christmas, when all <span class="old">thro&#8217;</span><span class="new">through</span> the house,<br>
          <span class="old">N</span><span class="new">n</span>ot a creature was stirring, not even a mouse;<br>
          The stockings were hung by the chimney with care,<br>
          <span class="old">I</span><span class="new">i</span>n hopes that St. Nicholas soon would be there;</p>
          
          <p>The children were nestled all snug in their beds,<br>
          <span class="old">W</span><span class="new">w</span>hile visions of sugar plums <span class="old">danc&#8217;d</span><span class="new">danced</span> in their heads,<br>
          And Mama in her &#8216;kerchief, and I in my cap,<br>
          <span class="old">H</span><span class="new">h</span>ad just settled our brains for a long winter&#8217;s nap-</p>
          
          <p>When out on the lawn there arose such a clatter,<br>
          I sprang from the bed to see what was the matter.<br>
          Away to the window I flew like a flash,<br>
          <span class="old">T</span><span class="new">t</span>ore open the shutters, and threw up the sash.</p>
          
          <p>The moon on the breast of the new<span class="old"> </span><span class="new">-</span>fallen snow,<br>
          <span class="old">G</span><span class="new">g</span>ave the lustre of mid-day to objects below<span class="old">;</span><span class="new">,</span><br>
          <span class="old">W</span><span class="new">w</span>hen, what to my wondering eyes should appear,<br>
          <span class="old">B</span><span class="new">b</span>ut a minature sleigh, and eight tiny <span class="old">rein-deer</span><span class="new">reindeer</span>,</p>
          
          <p>With a little old driver, so lively and quick,<br>
          I knew in a moment it must be St. Nick.<br>
          More rapid than eagles<span class="new">, </span> his coursers they came,<br>
          <span class="old">A</span><span class="new">a</span>nd he whistled, and shouted, and call&#8217;d them by name:</p>
          
          <p>&#8220;Now! Dasher, now! Dancer, now! Prancer, and Vixen,<br>
          <span class="old">&#8220;</span>On<span class="old">!</span><span class="new">,</span> Comet<span class="old">,</span><span class="new">!</span> <span class="old">on!</span><span class="new">on,</span> Cupid<span class="old">,</span><span class="new">!</span> <span class="old">on!</span><span class="new">on</span> <span class="old">Dunder</span><span class="new">Donner</span> and <span class="old">Blixem</span><span class="new">Blitzen</span>;<br>
          <span class="old">&#8220;</span>To the top of the porch! to the top of the wall!<br>
          <span class="old">&#8220;</span>Now dash away! <span class="old">d</span><span class="new">D</span>ash away! <span class="old">d</span><span class="new">D</span>ash away all!&#8221;</p>
          
          <p>As dry leaves before the wild hurricane fly,<br>
          <span class="old">W</span><span class="new">w</span>hen they meet with an obstacle, mount to the sky<span class="old">;</span><br>
          <span class="old">S</span><span class="new">s</span>o up to the house-top the coursers they flew,<br>
          <span class="old">W</span><span class="new">w</span>ith the sleigh full of <span class="old">T</span><span class="new">t</span>oys &emdash; and St. Nicholas too:</p>
          
          <p>And then<span class="new">,</span> in a twinkling, I heard on the roof<br>
          <span class="old">T</span><span class="new">t</span>he prancing and pawing of each little hoof.<br>
          As I drew in my head<span class="old">,</span> and was turning around,<br>
          <span class="old">D</span><span class="new">d</span>own the chimney St. Nicholas came with a bound:</p>
          
          <p>He was <span class="old">dress&#8217;d</span><span class="new">dressed</span> all in fur, from his head to his foot,<br>
          <span class="old">A</span><span class="new">a</span>nd his clothes were all <span class="old">tarnish&#8217;d</span><span class="new">tarnished</span> with ashes and soot<span class="old">;</span><span class="new">.</span><br>
          A bundle of toys <span class="old">was</span><span class="new">he had</span> flung on his back,<br>
          <span class="old">A</span><span class="new">a</span>nd he <span class="old">look&#8217;d</span><span class="new">looked</span> like a peddler just opening his pack<span class="old">:</span><span class="new">.</span></p>
          
          <p>His eyes<span class="old"> &emdash; </span><span class="new">&emdash;</span>how they twinkled! <span class="old">h</span><span class="new">H</span>his dimples<span class="old">,</span> how merry<span class="old">,</span><span class="new">!</span><br>
          His cheeks were like roses, his nose like a cherry<span class="old">;</span><span class="new">!</span><br>
          His droll little mouth was drawn up like a bow,<br>
          <span class="old">A</span><span class="new">a</span>nd the beard of his chin was as white as the snow<span class="old">;</span><span class="new">,</span><br>
          The stump of a pipe he held tight in his teeth,<br>
          <span class="old">A</span><span class="new">a</span>nd the smoke it encircled his head like a wreath.<br>
          He had a broad face<span class="old">,</span> and a little round belly<br>
          <span class="old">T</span><span class="new">t</span>hat shook when he <span class="old">laugh&#8217;d</span><span class="new">laughed</span>, like a bowl full of jelly<span class="old">:</span><span class="new">.</span></p>
          
          <p>He was chubby and plump, a right jolly old elf,<br>
          And I <span class="old">laugh&#8217;d</span><span class="new">laughed</span> when I saw him<span class="new">,</span> in spite of myself<span class="old">;</span><span class="new">.</span><br>
          A wink of his eye and a twist of his head<br>
          <span class="old">S</span><span class="new">s</span>oon gave me to know I had nothing to dread.</p>
          
          <p>He spoke not a word, but went straight to his work,<br>
          <span class="old">A</span><span class="new">a</span>nd <span class="old">fill&#8217;d</span><span class="new">filled</span> all the stockings<span class="old">;</span><span class="new">,</span> then <span class="old">turn&#8217;d</span><span class="new">turned</span> with a jerk<span class="old">,</span><span class="new">.</span><br>
          And laying his finger aside of his nose<br>
          <span class="old">A</span><span class="new">a</span>nd giving a nod, up the chimney he rose.</p>
          
          <p>He <span class="old">sprung</span><span class="new">sprang</span> to his sleigh, to his team gave a whistle,<br>
          And away they all flew<span class="old">,</span> like the down of a thistle<span class="old">:</span>.<br>
          But I heard him exclaim, <span class="old">ere</span><span class="new">as</span> he drove out of sight<span class="old">&emdash;</span><span class="new">,</span><br>
          <span class="new">&#8220;</span>Happy Christmas to all, and to all a good night<span class="old">.</span><span class="new">!&#8221;</span></p>
        
        </div>
      </div>
      
    </div>
    
  <?php endwhile; ?>
<?php endif; ?>

<?php get_template_part('content', 'footer'); ?>

<?php get_footer(); ?>