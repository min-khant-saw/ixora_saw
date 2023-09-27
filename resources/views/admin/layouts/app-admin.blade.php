<!DOCTYPE html>
<html lang="en">
@include('admin.header.head')

<body class="flex">
    <div>
        @include('admin.layouts.navigation')
    </div>
    <div class="bg-slate-100 w-full">
        {{ $slot }}
    </div>
    <script>
        const dashboardContainer = document.querySelector('.dashboard-container')
        const applicationContainer = document.querySelector('.application-container')
        const application = document.querySelector('.application')
        const dashboard = document.querySelector('.dashboard')

        dashboardContainer.addEventListener('click', () => {
            if (dashboard.offsetHeight === 0) {
                dashboard.style.height = '100px'
                dashboard.style.opacity = '1'
                dashboard.style.visibility = 'visible'
                return isOpenDashboard = true
            }
            dashboard.style.opacity = '0'
            dashboard.style.height = '0px'
            dashboard.style.visibility = 'hidden'
            return isOpenDashboard = false
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
