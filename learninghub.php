<?php
include 'articles.php';

$hvac_basics_articles = array_slice($articles, 0, 5);
$remaining_articles = array_slice($articles, 5);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Bill's Heating & A/C | Learning Hub</title>
    <link rel="canonical" href="https://callbills.com/learninghub.php">
    <meta name="description" content="Bill's Heating & A/C: Learning Hub. Then internets most complete source of consumer HVAC knowledge!">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='dns-prefetch' href='//www.gstatic.com'/>
        <link rel='dns-prefetch' href='//gstatic.com'/>
        <link rel='dns-prefetch' href='//ajax.googleapis.com'/>
        <link rel='dns-prefetch' href='//google-analytics.com'/>
        <link rel='dns-prefetch' href='//www.google-analytics.com'/>
        <link rel='dns-prefetch' href='//googletagmanager.com'/>
        <link rel='dns-prefetch' href='//www.googletagmanager.com'/>
        <link rel='dns-prefetch' href='//widgets.leadconnectorhq.com'/>
        <link rel=preconnect href="https://www.google.com">
        <link rel=preconnect href="https://googleads.g.doubleclick.net">
        <link rel=preconnect href="https://widgets.leadconnectorhq.com">
        <link rel="icon" type="image/png" sizes="16x16" href="https://callbillsheating.s3.us-west-2.amazonaws.com/favicon-16x16.png">
        <link rel="icon" type="image/webp" sizes="32x32" href="https://callbillsheating.s3.us-west-2.amazonaws.com/favicon-32x32.webp">
        <link rel="icon" type="image/svg+xml" href="https://callbillsheating.s3.us-west-2.amazonaws.com/large-favicon.svg">
        <link rel="apple-touch-icon" sizes="180x180" href="https://callbillsheating.s3.us-west-2.amazonaws.com/favicon180x180.png">
        <link rel="preload" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:ital@0;1&family=Roboto:wght@900&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital@0;1&family=Roboto:wght@900&display=swap"></noscript>
        <link rel="stylesheet" href="styles/learningcritical.css">
        <link rel="stylesheet" href="styles/headerstyle.css">
        <link rel="stylesheet" href="styles/footerstyle.css">

        <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-NZQJPVRS');</script>
  <!-- End Google Tag Manager -->
    
    <!-- Open Graph and Twitter Cards -->
    <meta property="og:title" content="Bill's Heating & A/C | Learning Hub">
    <meta property="og:description" content="Bill's Heating & A/C: Learning Hub. Then internets most complete source of consumer HVAC knowledge!">
    <meta property="og:image" content="https://callbillsheating.s3.us-west-2.amazonaws.com/social-share-image.webp">
    <meta property="og:url" content="https://callbills.com/learninghub.php">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@BillsAir">
    <meta name="twitter:title" content="Bill's Heating & A/C | Learning Hub">
    <meta name="twitter:description" content="Bill's Heating & A/C: Learning Hub. Then internets most complete source of consumer HVAC knowledge!">
    <meta name="twitter:image" content="https://callbillsheating.s3.us-west-2.amazonaws.com/summary-large-image.webp">

    <!-- Schema Markup-->
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "HVACBusiness",
        "name": "Bill's Heating & A/C",
        "image": "https://callbillsheating.s3.us-west-2.amazonaws.com/social-share-image.jpg",
        "@id": "https://callbills.com/",
        "url": "https://callbills.com",
        "telephone": "+1-208-777-5528",
        "priceRange": "$$",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "1332 G St.",
          "addressLocality": "Lewiston",
          "addressRegion": "ID",
          "postalCode":"83501",
          "addressCountry": "US"
        },
        "award": ["York 2023 Dealer of the Year", "Inlander North Idaho's Best HVAC Service 2023", "York Top Sales Growth Northwest Region 2020", "Top York Sales Northwest Region 2020", "Top York Sales Northwest Region 2019", "Mitsubishi Ductless Residential New Construction Excellence 2022-23", "Gensco Sales Excellence 2017 Platinum Level Mountain Region", "Gensco Sales Excellence 2018 Platinum Level Mountain Region", "Best Of Reader Poll 2023 Inander North Idaho"],
        "geo": {
          "@type": "GeoCoordinates",
          "latitude": 46.41670,
          "longitude": -117.01430
        },
        "openingHoursSpecification": [
          {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
              "Monday",
              "Tuesday",
              "Wednesday",
              "Thursday",
              "Friday"
            ],
            "opens": "07:00",
            "closes": "17:00"
          },
          {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": "Saturday",
            "opens": "07:00",
            "closes": "17:00"
          }
        ],
        "sameAs": [
        "https://www.facebook.com/billsheating",
        "https://www.instagram.com/billsheatingandac"
      ],
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9", // 
        "reviewCount": "3585"  
      },
      "review": [
        {
          "@type": "Review",
          "author": {
            "@type": "Person",
            "name": "Josh Varness"
          },
          "reviewRating": {
            "@type": "Rating",
            "ratingValue": "5",
            "bestRating": "5"
          },
          "reviewBody": "I had Bill's out to replace my old furnace and add a new heat pump unit. I would recommend this company to anyone. They did the job in about 4.5-5 hours answered any questions I had and were on their way. Chris was very helpful when he came out to quote the job. He gave me very competitive pricing, and their installer Sean and his crew were quick and efficient. Not to mention very friendly.",
          "publisher": {
            "@type": "Organization",
            "name": "Google Reviews"
          }
        },
        {
          "@type": "Review",
          "author": {
            "@type": "Person",
            "name": "Jessica Marcus"
          },
          "reviewRating": {
            "@type": "Rating",
            "ratingValue": "5",
            "bestRating": "5"
          },
          "reviewBody": "James and his crew were awesome! They put in a new heating and air conditioning system for us and they did a great job! They also got it done quickly and efficiently. We are so glad we decided to go with this company! They are all amazing and super helpful! We are very happy!",
          "publisher": {
            "@type": "Organization",
            "name": "Google Reviews"
          }
        },
        {
          "@type": "Review",
          "author": {
            "@type": "Person",
            "name": "Fallon Fehringer"
          },
          "reviewRating": {
            "@type": "Rating",
            "ratingValue": "5",
            "bestRating": "5"
          },
          "reviewBody": "I called two different HVAC companies regarding installation of a ductless mini-split in my newly built craft shed. Both were very responsive and answered the phone on my first call; however, one could not even quote me for three weeks, and Bill’s was able to quote me on the following day. Bill’s quote included submission of a rebate from Avista for me, instead of expecting me to call Avista and figure it out myself. I did have both companies quote me and the quote from Bill’s was about $1500 less ($1000 less without the rebate) and for what appeared to be comparable equipment (although of course I’m not a professional). The other company also told me, “there is probably a rebate from Avista, but you will have to call and ask them if you qualify.” A bit disappointing. When it came to scheduling, Bill’s was able to install as soon as the next day. The other company was a month out. Ultimately it was a pretty easy choice, simply due to price and scheduling availability. The other company I have worked with before, and their staff is responsive and courteous, but they must just be quite busy and I really wanted the project done quickly so I can start using my hobby shed! Regarding the staff I dealt with directly, I cannot recommend them highly enough. I was quoted by Isaac, who was on time, professional, and very nice to talk to. I spoke with the finance manager Jennifer on multiple occasions. She always picked up her phone promptly and was super helpful. Finally my unit was installed by Jonathan and Austin, and they were also very professional and they worked FAST. The work they did was still of great quality, and they installed the unit exactly as I had asked. Highly recommend Bill’s and will definitely call them in the future for HVAC needs.",
          "publisher": {
            "@type": "Organization",
            "name": "Google Reviews"
          }
        }
      ]
    }
  </script>
  </head>
<body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NZQJPVRS"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
    <?php include 'header.php'; ?> 
    <section class="learning-hero">
      <h2>Learning Hub</h2>
      <p>From Beginner to Pro&dash;Everything you need to know about your HVAC system.</p>
      <img class="blog-main-image" src="blogimages\learning-feature.webp">
    </section>
    <div class="decorative-divider"></div>
    <section class="blog-section-outer">
    <div class="blog-section blog-section-first-headline">
    <h2>Introduction to Your HVAC System&colon;</h2>
    <div class="blog-cards">
        <?php foreach ($hvac_basics_articles as $article): ?>
            <?php
            // Create a comma-separated list of categories for data-category attribute
            $categories_str = implode(',', array_map('htmlspecialchars', $article['categories']));
            // Calculate read time
            $read_time = ceil($article['word_count'] / 200); // Assuming 200 words per minute
            ?>
            <div class="blog-card" data-category="<?php echo $categories_str; ?>" data-date="<?php echo htmlspecialchars($article['date']); ?>">
                <a href="<?php echo htmlspecialchars($article['url']); ?>" aria-label="Read more about <?php echo htmlspecialchars($article['title']); ?>">
                    <img src="<?php echo htmlspecialchars($article['image']); ?>" alt="<?php echo htmlspecialchars($article['alt_text']); ?>" loading="lazy">
                    <div class="card-content">
                        <h2><?php echo htmlspecialchars($article['title']); ?></h2>
                        <p class="article-meta">By <?php echo htmlspecialchars($article['author']); ?> on <?php echo htmlspecialchars($article['date']); ?> • <?php echo $read_time; ?> min read</p>
                        <p><?php echo htmlspecialchars($article['description']); ?></p>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
    </div>
</section>
       <!-- Back to Top Button -->
       <button id="back-to-top" title="Back to Top" aria-label="Back to Top">↑<br>TOP</button>
<!-- All Articles Section -->
<section class="blog-section blog-section-second-headline">
    <h2>All Articles</h2>
    <!-- Search Bar and Sorting Options -->
    <section class="controls">
        <div class="blog-search-bar">
            <input type="text" id="search-input" placeholder="Search articles..." aria-label="Search articles">
        </div>
        <div class="sort-options">
            <label for="sort-select">Sort by:</label>
            <select id="sort-select" aria-label="Sort articles">
                <option value="default">Default</option>
                <option value="date">New</option>
                <option value="title">Alphabetical</option>
                <!-- Add more sorting options if needed -->
            </select>
        </div>
    </section>

    <!-- Filter Options -->
    <section class="filter-section">
        <div class="filter-options">
            <?php
            // Get all unique categories from the remaining articles
            $all_categories = [];
            foreach ($remaining_articles as $article) {
                foreach ($article['categories'] as $category) {
                    if (!in_array($category, $all_categories)) {
                        $all_categories[] = $category;
                    }
                }
            }
            // Sort categories alphabetically
            sort($all_categories);

            // Output buttons for each category
            foreach ($all_categories as $category):
            ?>
                <button class="filter-button active" data-category="<?php echo htmlspecialchars($category); ?>">
                    <?php echo htmlspecialchars($category); ?>
                </button>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Remaining Articles -->
    <div class="blog-cards" id="all-articles">
        <?php foreach ($remaining_articles as $article): ?>
            <?php
            // Create a comma-separated list of categories for data-category attribute
            $categories_str = implode(',', array_map('htmlspecialchars', $article['categories']));
            // Calculate read time
            $read_time = ceil($article['word_count'] / 200); // Assuming 200 words per minute
            ?>
            <div class="blog-card" data-category="<?php echo $categories_str; ?>" data-date="<?php echo htmlspecialchars($article['date']); ?>">
                <a href="<?php echo htmlspecialchars($article['url']); ?>" aria-label="Read more about <?php echo htmlspecialchars($article['title']); ?>">
                    <img src="<?php echo htmlspecialchars($article['image']); ?>" alt="<?php echo htmlspecialchars($article['alt_text']); ?>" loading="lazy">
                    <div class="card-content">
                        <h2><?php echo htmlspecialchars($article['title']); ?></h2>
                        <p class="article-meta">By <?php echo htmlspecialchars($article['author']); ?> on <?php echo htmlspecialchars($article['date']); ?> • <?php echo $read_time; ?> min read</p>
                        <p><?php echo htmlspecialchars($article['description']); ?></p>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<div class="body-form-overlay">
            <form class="body-form-container ajax-form" method="post">
              <div class="request-form-headline"><h3>Schedule Your FREE Estimate!</h3></div>
              <label for="name-body">Full Name: <input id="name-body" type="text" autocomplete="name" placeholder="Enter Full Name" name="name" required></label>
              <label for="email-body">Email: <input id="email-body" type="email" autocomplete="email" placeholder="Enter Email" name="email" required></label>
              <label for="phone-body">Phone: <input id="phone-body" type="tel" autocomplete="tel" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="phone" required></label>
              <label for="street-body">Street: <input id="street-body" type="text" autocomplete="address-line1" placeholder="Street" name="street" required></label>
              <label for="city-body">City: <input type="text" id="city-body" autocomplete="address-level2" placeholder="City" name="city" required></label>
              <label for="state-body">State: <input type="text" id="state-body" autocomplete="address-level1" placeholder="State" name="state" required></label>
              <label for="message-body">Message: <textarea id="message-body" name="message" autocomplete="on" placeholder="Enter message here" rows="4" required></textarea></label>
              <div class="recaptcha-placeholder"></div>
              <button type="submit" class="btn">Submit</button>
              <button type="button" class="btn cancel">Close</button>
            </form>
          </div>
          <div class="modal">
            <div class="modal-content">
                <span class="close-button">&times;</span>
                <p>Thank you for your submission!</p>
            </div>
          </div>
          <?php include 'footer.php'; ?>  
          <script defer src="scripts/src.js"></script> 
          <script defer src="scripts/search.js"></script>
          <script defer src="scripts/forms.js"></script>
          <script defer src="scripts/blogfilter.js"></script>  
          <script defer src="scripts/blogcarousel.js"></script> 
          <script defer src="https://widgets.leadconnectorhq.com/loader.js" data-resources-url="https://widgets.leadconnectorhq.com/chat-widget/loader.js"></script>          
    
    

</body>
</html>