<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP with PDFTK</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
    <main class="w-full h-[100vh] flex justify-center items-center">
        <form 
            action="generate.php" 
            method="post"
            class="p-6 shadow-md rounded-md flex flex-col gap-3"
        >
            <h1>Generate PDF</h1>
            <div class="flex gap-3 items-center">
                <input class="border-1 p-1 rounded-sm" type="text" name="first_name" placeholder="First Name" required />
                <input class="border-1 p-1 rounded-sm" type="text" name="last_name" placeholder="Last Name" required />
            </div>
            <input class="border-1 p-1 rounded-sm" type="email" name="email" placeholder="Email Address" required />
            <input class="border-1 p-1 rounded-sm" type="tel" name="phone" placeholder="Phone Number" required />
            <textarea class="border-1 p-1 rounded-sm" placeholder="Description" name="description" required>
            </textarea>
            <button
                    class="px-6 py-2 text-white bg-emerald-500 cursor-pointer hover:bg-emerald-600 transition-colors"
                    type="submit"
            >
                Create PDF
            </button>
        </form>
    </main>
</body>
</html>