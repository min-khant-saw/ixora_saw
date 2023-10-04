<!DOCTYPE html>
<html lang="en">
@include('admin.header.head')

<body class="flex">
    <div class="sticky top-0 left-0">
        @include('admin.layouts.navigation')
    </div>
    <div class="bg-slate-100 w-full">
        <div class="sticky top-0 left-0 mb-5">
            @include('admin.layouts.top-navigation')
            @if (session()->has('success'))
                <div class="w-full flex justify-center items-center bg-green-300 sticky top-0 left-0 p-1">
                    <h1 class="text-black font-bold text-lg">{{ session()->get('success') }}</h1>
                </div>
            @endif
        </div>

        <div class="w-full p-3">
            {{ $slot }}
            
        </div>
    </div>
    <script>
        const dashboardContainer = document.querySelector('.dashboard-container')
        const applicationContainer = document.querySelector('.application-container')
        const application = document.querySelector('.application')
        const dashboard = document.querySelector('.dashboard')

        dashboardContainer.addEventListener('click', () => {
            if (!dashboard.offsetHeight) {
                dashboard.style.height = '210px'
                dashboard.style.opacity = '1'
                dashboard.style.visibility = 'visible'
                return
            }
            dashboard.style.height = '0px'
            dashboard.style.opacity = '0'
            dashboard.style.visibility = 'hidden'
            return
        })

        applicationContainer.addEventListener('click', () => {
            if (application.offsetHeight === 0) {
                application.style.height = '50px'
                application.style.opacity = '1'
                application.style.visibility = 'visible'
                return
            }
            application.style.opacity = '0'
            application.style.height = '0px'
            application.style.visibility = 'hidden'
            return
        })
    </script>
</body>

</html>
