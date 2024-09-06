<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                        alt="Your Company">
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <a href="home"
                            class=" <?= isURL("/") || isURL("/home") ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white"; ?> rounded-md px-3 py-2 text-sm font-medium">Home</a>
                        <a href="about"
                            class=" <?= isURL("/about") ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white"; ?> rounded-md px-3 py-2 text-sm font-medium">About</a>
                        <a href="contact"
                            class=" <?= isURL("/contact") ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white"; ?> rounded-md px-3 py-2 text-sm font-medium">Contact</a>
                        <a href="notes"
                            class=" <?= isURL("/notes") ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white"; ?> rounded-md px-3 py-2 text-sm font-medium">Notes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>