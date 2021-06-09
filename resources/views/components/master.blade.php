<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>BakeIt</title>
</head>
<body class="min-h-screen mb-24">
    <nav class="flex items-center justify-between flex-wrap p-6 border-b-2 border-pink-600">
        <div class="flex items-center flex-shrink-0 text-black mr-6">
            <a href="/" class="text-black italic">
                <h1 class="text-4xl">BakeIt</h1>
            </a>
        </div>

        <div class="flex font-medium">
            <div class="w-full block sm:flex sm:items-center sm:w-auto">
                <div class="text-lg sm:flex-grow">
                    <a href="/" class="block mt-4 sm:inline-block sm:mt-0 text-teal-200 mr-4 border-b-2 border-transparent hover:border-pink-600 {{ Request::is('/') ? 'border-b-2 border-pink-600' : '' }}">Home</a>
                </div>
            </div>
            <div class="w-full block sm:flex sm:items-center sm:w-auto">
                <div class="text-lg sm:flex-grow">
                    <a href="#" class="block mt-4 sm:inline-block sm:mt-0 text-teal-200 mr-4 border-b-2 border-transparent hover:border-pink-600 {{ Request::is('/blogg') ? 'border-b-2 border-pink-600' : '' }}">Blogg</a>
                </div>
            </div>
            <div class="w-full block sm:flex sm:items-center sm:w-auto">
                <div class="text-lg sm:flex-grow">
                    <a href="#" class="block mt-4 sm:inline-block sm:mt-0 text-teal-200 mr-4 border-b-2 border-transparent hover:border-pink-600 {{ Request::is('/om') ? 'border-b-2 border-pink-600' : '' }}">Om</a>
                </div>
            </div>
            <div class="w-full block sm:flex sm:items-center sm:w-auto">
                <div class="text-lg sm:flex-grow">
                    <a href="#" class="block mt-4 sm:inline-block sm:mt-0 text-teal-200 mr-4 border-b-2 border-transparent hover:border-pink-600 {{ Request::is('/contact') ? 'border-b-2 border-pink-600' : '' }}">Kontakt</a>
                </div>
            </div>
        </div>
    </nav>

    {{ $slot }}


    <footer class="fixed w-full flex items-center justify-center left-0 bottom-0 bg-white">
        <div class="flex gap-4 mb-2">
            <a href="https://www.instagram.com" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DB2777" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <rect x="4" y="4" width="16" height="16" rx="4" />
                    <circle cx="12" cy="12" r="3" />
                    <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
                </svg>
            </a>
            <a href="https://www.snapchat.com" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-snapchat" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DB2777" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M16.882 7.842a4.882 4.882 0 0 0 -9.764 0c0 4.273 -.213 6.409 -4.118 8.118c2 .882 2 .882 3 3c3 0 4 2 6 2s3 -2 6 -2c1 -2.118 1 -2.118 3 -3c-3.906 -1.709 -4.118 -3.845 -4.118 -8.118zm-13.882 8.119c4 -2.118 4 -4.118 1 -7.118m17 7.118c-4 -2.118 -4 -4.118 -1 -7.118" />
                </svg>
            </a>
            <a href="https://www.tiktok.com" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-tiktok" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DB2777" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M9 12a4 4 0 1 0 4 4v-12a5 5 0 0 0 5 5" />
                </svg>
            </a>
            <a href="https://www.twitter.com" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-twitter" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#DB2777" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z" />
                </svg>
            </a>
        </div>
    </footer>

    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;
        
        for (i = 0; i < coll.length; i++) {
          coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
              content.style.display = "none";
            } else {
              content.style.display = "block";
            }
          });
        }
        </script>
</body>
</html>