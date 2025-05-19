<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Strong Editor is a free online text editor that helps you write better by highlighting poor wording in real-time. Simple, fast and privacy-focused.">
    <meta property="og:title" content="Strong Editor - Free Online Text Editor">
    <meta property="og:description" content="Strong Editor is a free online text editor that helps you write better by highlighting poor wording in real-time. Simple, fast and privacy-focused.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://strongeditor.com">
    <meta property="og:image" content="https://strongeditor.com/src/img/logo.png">
    <title>Strong Editor - Free Online Text Editor to Write Better</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/animations/scale.css" >
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/themes/light-border.css" >
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer data-domain="strongeditor.com" src="https://plausible.io/js/script.js"></script>
    <script>
        tailwind.config = {
            content: ["./*.html"],
            theme: {
                extend: {
                    colors: {
                        primary: {
                            blue: {
                                light: "#00ccdd"
                            }
                        }
                    }
                }
            },
            darkMode: "class"
        };
    </script>
    <link rel="stylesheet" href="./src/style.css">
</head>

<body class="bg-gray-100 dark:bg-gray-900">
    <nav class="bg-gray-50 border-gray-200 border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800"
        aria-label="Breadcrumb">
        <div class="container mx-auto flex flex-wrap items-center justify-between">
            <div class="flex gap-x-3">
                <img class="h-[48px]" src="./src/img/logo.png" alt="logo">
                <h1 class="self-center text-lg font-semibold dark:text-white">
                    Strong Editor - Free Online Text Editor to Write Better
                </h1>
            </div>
            <div class="flex md:order-2">
                <button id="full-screen" type="button"
                    class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                    <svg id="full-screen-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15">
                        </path>
                    </svg>
                    <svg id="exit-full-screen-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true" class="hidden w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 9V4.5M9 9H4.5M9 9L3.75 3.75M9 15v4.5M9 15H4.5M9 15l-5.25 5.25M15 9h4.5M15 9V4.5M15 9l5.25-5.25M15 15h4.5M15 15v4.5m0-4.5l5.25 5.25">
                        </path>
                    </svg>
                </button>
                <button id="theme-toggle" type="button"
                    class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <div class="container mt-10" id="content">
        <div class="row">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 m-3 lg:m-0" id="editor-wrapper">
                <div class="lg:col-span-2 bg-gray-100 dark:bg-gray-900" id="editor-section">
                    <div
                        class="relative editor-height flex flex-col dark:text-slate-200 bg-white shadow-md w-full rounded-xl bg-clip-border dark:bg-gray-800">
                        <div class="dark:text-slate-200" id="editor">
                            <p>
                                <strong class="ql-size-huge">Words sell. Make them count!</strong>
                            </p>
                            <br>

                            <p>It doesn’t matter whether you want to sell a product or an idea, the wording matters. You want to express your ideas the best possible way. </p><br>

                            <p>Strong Editor is a free online text editor that highlights poor wording in real-time - and makes you write better.</p><br>

                            <p>No, Strong Editor is not going to replace Google Docs or Microsoft Office as your word
                                processor. That’s not the idea. The idea is that you can use Strong Editor as the
                                first tool to type in your draft and when you follow its suggestions, your first
                                version will already be stronger than it would be without it.</p><br>

                            <p>Strong Editor is free, simple, fast, and privacy focused. Nothing you type here gets
                                recorded anywhere, this website doesn’t even use any tracking cookies or other such
                                nonsense.</p><br>

                            <p>You could say this is a copywriting tool. Or a writing assistant. But we just call it Strong Editor.</p><br>

                            <p>Click here and start to write.</p>


                        </div>
                    </div>
                </div>
                <div id="editor-info">
                    <div
                        class="relative flex flex-col text-gray-700 bg-white shadow-md w-full rounded-xl bg-clip-border dark:bg-gray-800">
                        <nav class="flex min-w-[240px] flex-col gap-1 p-2 text-base font-normal text-blue-gray-700 dark:text-gray-100"
                            aria-label="Breadcrumb">
                            <div class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start"
                                id="strength-wrapper">
                                <span class="text-lg font-bold">Strength</span>
                                <div class="grid ml-auto place-items-center justify-self-end">
                                    <span id="content-strength" class="bg-blue-100 text-blue-800 text-md font-bold me-2 px-5 py-0.5 rounded-full dark:bg-gray-700 dark:text-blue-400 border border-blue-400">0</span>
                                </div>
                            </div>
                            <hr >
                            <div
                                class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start">
                                Letters
                                <div class="grid ml-auto place-items-center justify-self-end">
                                    <div
                                        class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-gray-900 dark:text-gray-100 uppercase rounded-full select-none whitespace-nowrap bg-gray-900/10 dark:bg-gray-700">
                                        <span id="content-letters">0</span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start">
                                Characters
                                <div class="grid ml-auto place-items-center justify-self-end">
                                    <div
                                        class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-gray-900 dark:text-gray-100 uppercase rounded-full select-none whitespace-nowrap bg-gray-900/10 dark:bg-gray-700">
                                        <span id="content-characters">0</span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start">
                                Words
                                <div class="grid ml-auto place-items-center justify-self-end">
                                    <div
                                        class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-gray-900 dark:text-gray-100 uppercase rounded-full select-none whitespace-nowrap bg-gray-900/10 dark:bg-gray-700">
                                        <span id="content-words">0</span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start">
                                Sentences
                                <div class="grid ml-auto place-items-center justify-self-end">
                                    <div
                                        class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-gray-900 dark:text-gray-100 uppercase rounded-full select-none whitespace-nowrap bg-gray-900/10 dark:bg-gray-700">
                                        <span id="content-sentences">0</span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start">
                                Paragraphs
                                <div class="grid ml-auto place-items-center justify-self-end">
                                    <div
                                        class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-gray-900 dark:text-gray-100 uppercase rounded-full select-none whitespace-nowrap bg-gray-900/10 dark:bg-gray-700">
                                        <span id="content-paragraphs">0</span>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div
                        class="relative flex flex-col text-gray-700 bg-white shadow-md w-full rounded-xl bg-clip-border dark:bg-gray-800 mt-4 p-5">
                        <div class="space-y-2 text-blue-gray-700 dark:text-gray-100" id="label-list"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav id="footer" class="bg-gray-50 border-gray-200 border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800 mt-10" aria-label="Breadcrumb">
        <div class="container mx-auto items-center">
            <p class="self-center text-lg whitespace-nowrap dark:text-white text-wrap footer">
                Copyright <?php echo date('Y'); ?>
                <a href="https://greatsoftwarecompany.com" class="self-center text-lg whitespace-nowrap dark:text-white footer" style="text-decoration: underline;">
                    Great Software Company</a>
            </p>
            <p class="self-center text-lg whitespace-nowrap dark:text-white text-wrap footer">
                <span class="text-sm">Privacy policy: We respect your privacy by not spying on you. Everything you type stays here.</span>
            </p>

        </div>
    </nav>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
    <script src="./src/main.js"></script>
    <script src="./src/theme.js"></script>
</body>

</html>
