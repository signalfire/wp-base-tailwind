<!DOCTYPE html>
<html lang="en">
  <head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXXXX-XX"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-XXXXXXXXX-XX');
    </script>      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
    <title><?php wp_title('');?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head();?>
  </head>
  <body class="flex flex-col min-h-screen">
    <nav class="bg-gray-100 py-2 border-b border-gray-200">
      <div class="container lg:max-w-screen-lg mx-auto">
        <div class="grid grid-cols-12 gap-4">
          <div class="col-span-12 lg:col-span-6">
            <a href="/" class="text-xl" title="Return to Business Name Home">Business Name</a>
          </div>
          <div class="col-span-12 lg:col-span-6 flex items-center justify-end">
            <a href="" title="Open Menu">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </nav>
    <main class="flex-1">