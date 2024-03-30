$(function() {
    var $sections = $('.form-section');
    var $progressBars = $('.progress-bar');
    var currentProgressBarIndex = 0;

    function navigateTo(index, progressBarIndex) {
        $sections.removeClass('current').eq(index).addClass('current');

        // Toggle tombol navigasi sesuai dengan index
        $('.form-navigation .previous').toggle(index > 0);
        var atTheEnd = index >= $sections.length - 1;
        $('.form-navigation .next').toggle(!atTheEnd);
        $('.form-navigation [Type=submit]').toggle(atTheEnd);

        // Peroleh elemen progress bar berdasarkan indeks
        const progressBar = $progressBars.eq(progressBarIndex);

        // Dapatkan semua langkah-langkah di dalam progress bar ini
        const steps = progressBar.find('.step');

        // Tetapkan warna langkah-langkah yang sesuai
        steps.each(function(i, stepElement) {
            if (i <= index) {
                stepElement.style.backgroundColor = "#2563EB";
                stepElement.style.color = "white";
            } else {
                stepElement.style.backgroundColor = "#F3F4F6";
                stepElement.style.color = "black";
            }
        });
    }

    function curIndex() {
        return $sections.index($sections.filter('.current'));
    }

    $('.form-navigation .previous').click(function() {
        navigateTo(curIndex() - 1, currentProgressBarIndex);
    });

    $('.form-navigation .next').click(function() {
        var currentIndex = curIndex();
        var nextIndex = currentIndex + 1;
        currentProgressBarIndex = nextIndex % $progressBars.length; // Perbarui indeks progress bar

        $('.employee-form').parsley().whenValidate({
            group: 'block-' + currentIndex
        }).done(function() {
            navigateTo(nextIndex, currentProgressBarIndex);
        });

    });

    $('.form-navigation [type=submit]').click(function() {
        var currentIndex = curIndex();
        var progressBarIndex = currentIndex % $progressBars.length;

        $('.employee-form').parsley().whenValidate({
            group: 'block-' + currentIndex
        }).done(function() {
            // Lakukan sesuatu setelah validasi sukses
        }).fail(function() {
            // Lakukan sesuatu setelah validasi gagal
        });
    });

    $sections.each(function(index, section) {
        $(section).find(':input').attr('data-parsley-group', 'block-' + index);
    });

    // Navigasi ke langkah pertama untuk setiap progress bar saat memuat halaman
    $sections.each(function(index, section) {
        navigateTo(0, index);
    });
});
