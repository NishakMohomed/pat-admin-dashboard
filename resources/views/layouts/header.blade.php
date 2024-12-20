<header class="flex h-14 items-center border-b gap-4 px-4 lg:h-[60px] lg:px-6">
    <div class="flex items-center gap-2">
        <button id="toggle-sidebar" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 hover:bg-accent hover:text-accent-foreground h-7 w-7 -ml-1 md:hidden">
            <svg 
            xmlns="http://www.w3.org/2000/svg" 
            width="24" 
            height="24" 
            viewBox="0 0 24 24" 
            fill="none" 
            stroke="currentColor" 
            stroke-width="2" 
            stroke-linecap="round" 
            stroke-linejoin="round">
                <rect width="18" height="18" x="3" y="3" rx="2"/>
                <path d="M9 3v18"/>
            </svg>
        </button>
        <div class="shrink-0 bg-border w-[1px] mr-2 h-4 md:hidden"></div>
        <div class="flex flex-wrap items-center gap-1.5 break-words text-sm text-muted-foreground sm:gap-2.5">
            Advertisements
        </div>
    </div>
    <!-- black opacity -->
     <div id="maskDiv" class="hidden md:hidden fixed inset-0 z-50 bg-black/80">

     </div>
    <!-- sheet goes here -->
     <x-dashboard.sheet />
    <!-- dropdown goes here -->
     <x-dashboard.dropdown />

    @push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function () {

            //---------------------------------Sheet--------------------------------------------
            const sidebarToggle = document.getElementById('toggle-sidebar');
            const sidebar = document.getElementById('sidebar-content');
            const maskDiv = document.getElementById('maskDiv');
            sidebarToggle.addEventListener('click', () => {
                sidebar.classList.toggle('hidden');
                maskDiv.classList.toggle('hidden');
            });

            document.addEventListener('click', (event) => {
                if(!sidebar.contains(event.target) && !sidebarToggle.contains(event.target)){
                    sidebar.classList.add("hidden");
                    maskDiv.classList.add('hidden');
                }
            })

            //---------------------------------Dropdown-----------------------------------------
            const button = document.getElementById("dropdown-trigger");
            const dropdown = document.getElementById("dropdown-content");

            button.addEventListener("click", () => {
                dropdown.classList.toggle("hidden");
            });

            // Close dropdown when clicking outside
            document.addEventListener("click", (event) => {
                if (!button.contains(event.target) && !dropdown.contains(event.target)) {
                    dropdown.classList.add("hidden");
                }
            });
        });

    </script>
    @endpush
</header>