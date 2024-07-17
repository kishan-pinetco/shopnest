
        function showSidebar() {
            // $("#sidebarContainer").addClass('block');
            activePopup = 'sidebarContainer';
            let sidebarContainer = $('#sidebarContainer');
            sidebarContainer.show();
            sidebarContainer.addClass('sidebar-open');

            $('body').css('overflowY', 'hidden');
            // $('body').fadeTo(700, 0.5);
            event.preventDefault();
        }

        // close sidebarContainer using Esc key
        $(document).keydown(function(event) {
            if (event.key === 'Escape') {
                if (activePopup === 'sidebarContainer') {
                    closeSidebar();
                }
            }
        });

    function closeSidebar() { 
        let closeSidebar = $('#sidebarContainer');
        closeSidebar.addClass('sidebar-close');    

        $('body').css('overflow','visible');

        setTimeout(function () {
            closeSidebar.removeClass('sidebar-close').hide();
        }, 300);
        // $('body').fadeTo(800,1);   
    }