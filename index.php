<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AramJonghu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Standard favicon -->
    <link rel="icon" type="image/x-icon" href="/favicons/favicon.ico">

    <!-- PNG favicons -->
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">

    <!-- Apple Touch -->
    <link rel="apple-touch-icon" href="/favicons/apple-touch-icon.png">

    <!-- Android -->
    <link rel="icon" type="image/png" sizes="192x192" href="/favicons/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="/favicons/android-chrome-512x512.png">

</head>

<style>
        .github-logo svg {
            fill: currentColor;
            width: 24px;
            height: 24px;
            transition: fill 0.3s ease;
        }

        .github-logo:hover svg {
            fill: white;
        }
    </style>

<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen dark:bg-gray-900">

<!-- Header -->
<header class="bg-cyan-800 dark:bg-gray-800 text-white p-4">
    <div class="container mx-auto">
        <h1 id="page-title" class="text-3xl font-bold"></h1>
        <nav class="mt-2">
            <ul class="flex space-x-6">
                <li><a href="index.php" class="hover:underline">Home</a></li>
                <li><a href="gameron.php" class="hover:underline">Gameron</a></li>
                <li><a href="games.php" class="hover:underline">Games</a></li>
                <li><a href="socials.php" class="hover:underline">Socials</a></li>
                <li><a href="nextcloud/index.php" class="hover:underline">Nextcloud</a></li>
                <li><a href="http://stream.aramjonghu.nl" class="hover:underline">Stream</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Main Content -->
<div class="container mx-auto p-4 flex-grow" style="width: 70%;">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <!-- Grid Items -->
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Grid Item 1</h2>
            <p>This is some content for grid item 1.</p>
        </div>
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Grid Item 2</h2>
            <p>This is some content for grid item 2.</p>
        </div>
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Grid Item 3</h2>
            <p>This is some content for grid item 3.</p>
        </div>
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Grid Item 4</h2>
            <p>This is some content for grid item 4.</p>
        </div>
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Grid Item 5</h2>
            <p>This is some content for grid item 5.</p>
        </div>
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Grid Item 6</h2>
            <p>This is some content for grid item 6.</p>
        </div>
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Grid Item 7</h2>
            <p>This is some content for grid item 7.</p>
        </div>
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Grid Item 8</h2>
            <p>This is some content for grid item 8.</p>
        </div>
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Grid Item 9</h2>
            <p>This is some content for grid item 9.</p>
        </div>
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Grid Item 10</h2>
            <p>This is some content for grid item 10.</p>
        </div>
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Grid Item 11</h2>
            <p>This is some content for grid item 11.</p>
        </div>
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Grid Item 12</h2>
            <p>This is some content for grid item 12.</p>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-cyan-800 dark:bg-gray-800 text-white py-4">
    <div class="container mx-auto flex justify-between items-center">
        <p>&copy; <?php echo date('Y'); ?> AramJonghu. All rights reserved.</p>
        <p>
            <a href="https://github.com/AramMarkarov" target="_blank" class="github-logo flex items-center">
                <svg viewBox="0 0 16 16" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd"
                          d="M8 0C3.588 0 0 3.588 0 8c0 3.538 2.294 6.523 5.474 7.617.4.073.547-.174.547-.389 0-.191-.007-.698-.011-1.369-2.221.484-2.692-1.056-2.692-1.056-.364-.924-.889-1.172-.889-1.172-.726-.497.055-.487.055-.487.803.056 1.224.82 1.224.82.715 1.224 1.875.87 2.335.663.071-.516.28-.87.508-1.067-1.777-.202-3.642-.89-3.642-3.96 0-.872.312-1.586.822-2.144-.083-.202-.356-1.012.077-2.105 0 0 .672-.214 2.2.821a7.523 7.523 0 012.004-.267c.682 0 1.364.091 2.004.267 1.527-1.035 2.2-.821 2.2-.821.434 1.093.162 1.903.08 2.105.516.558.822 1.271.822 2.144 0 3.079-1.866 3.756-3.646 3.956.288.25.545.75.545 1.512 0 1.096-.01 1.978-.01 2.249 0 .216.146.467.554.388C13.706 14.523 16 11.538 16 8c0-4.412-3.588-8-8-8z"/>
                </svg>
            </a>
        </p>
    </div>
</footer>

<script>
// Set the header title to match the document's title
document.getElementById('page-title').textContent = document.title;
</script>

</body>

</html>
