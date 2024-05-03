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
                stepElement.style.backgroundColor = "#04D7B1";
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

        // Mencari tipe input dari langkah saat ini
        var $currentSection = $sections.eq(currentIndex);
        var $currentInputs = $currentSection.find('input[type="radio"]');
        var $currentText = $currentSection.find('input[type="text"]');
        var isTextInput = $currentText.length > 0;
        var isRadioInput = $currentInputs.length > 0;

        // Jika input adalah radio, periksa apakah ada yang dipilih
        if (isRadioInput) {
            var radioChecked = $currentInputs.filter(':checked').length > 0;
            if (!radioChecked) {
                // alert('Please select an option before proceeding.');
                return;
            }
        }

        if (isTextInput) {
            var $textInputs = $currentText.filter(function() {
                return $(this).val().trim() === '';
            });
            if ($textInputs.length > 0) {
                // alert('Please enter a value before proceeding.');
                return;
            }
        }

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
            // Tampilkan SweetAlert untuk konfirmasi pengiriman data
            Swal.fire({
                icon: 'success',
                title: 'Data berhasil dikirim!',
                showConfirmButton: false,
                timer: 3500 // Menampilkan SweetAlert selama 1.5 detik
            });

        }).fail(function() {
            // Lakukan sesuatu setelah validasi gagal
        });
    });

    // Setiap input pada setiap langkah akan memiliki grup Parsley sesuai dengan indeks langkahnya
    $sections.each(function(index, section) {
        $(section).find(':input').attr('data-parsley-group', 'block-' + index);
    });

    // Navigasi ke langkah pertama untuk setiap progress bar saat memuat halaman
    $sections.each(function(index, section) {
        navigateTo(0, index);
    });
});




// question 1
document.addEventListener("DOMContentLoaded", function() {
    var ques1_1_a = document.getElementById('ques-1-1-a');
    var ques1_2_a = document.getElementById('ques-1-2-a');

    document.getElementById('ques-1-1-a').addEventListener('click', function() {
        ques1_1_a.classList.add('border-[#EE7900]', 'shadow-custom');
        ques1_2_a.classList.remove('border-[#EE7900]', 'shadow-custom');
    });

    document.getElementById('ques-1-2-a').addEventListener('click', function() {
        ques1_2_a.classList.add('border-[#EE7900]', 'shadow-custom');
        ques1_1_a.classList.remove('border-[#EE7900]', 'shadow-custom');
    });
});

// question 2
document.addEventListener("DOMContentLoaded", function() {
    var ques1_1_a = document.getElementById('ques-2-1-a');
    var ques1_2_a = document.getElementById('ques-2-2-a');
    var ques1_3_a = document.getElementById('ques-2-3-a');

    document.getElementById('ques-2-1-a').addEventListener('click', function() {
        ques1_1_a.classList.add('border-[#EE7900]', 'shadow-custom');
        ques1_2_a.classList.remove('border-[#EE7900]', 'shadow-custom');
        ques1_3_a.classList.remove('border-[#EE7900]', 'shadow-custom');
    });

    document.getElementById('ques-2-2-a').addEventListener('click', function() {
        ques1_2_a.classList.add('border-[#EE7900]', 'shadow-custom');
        ques1_1_a.classList.remove('border-[#EE7900]', 'shadow-custom');
        ques1_3_a.classList.remove('border-[#EE7900]', 'shadow-custom');
    });
    
    document.getElementById('ques-2-3-a').addEventListener('click', function() {
        ques1_2_a.classList.remove('border-[#EE7900]', 'shadow-custom');
        ques1_1_a.classList.remove('border-[#EE7900]', 'shadow-custom');
        ques1_3_a.classList.add('border-[#EE7900]', 'shadow-custom');
    });
});

// qustion 3
document.addEventListener("DOMContentLoaded", function() {
    var ques1_1_a = document.getElementById('ques-3-1-a');
    var ques1_2_a = document.getElementById('ques-3-2-a');

    document.getElementById('ques-3-1-a').addEventListener('click', function() {
        ques1_1_a.classList.add('border-[#EE7900]', 'shadow-custom');
        ques1_2_a.classList.remove('border-[#EE7900]', 'shadow-custom');
    });

    document.getElementById('ques-3-2-a').addEventListener('click', function() {
        ques1_2_a.classList.add('border-[#EE7900]', 'shadow-custom');
        ques1_1_a.classList.remove('border-[#EE7900]', 'shadow-custom');
    });
});

// qustion 4
document.addEventListener("DOMContentLoaded", function() {
    var ques1_1_a = document.getElementById('ques-4-1-a');
    var ques1_2_a = document.getElementById('ques-4-2-a');
    var ques1_3_a = document.getElementById('ques-4-3-a');

    document.getElementById('ques-4-1-a').addEventListener('click', function() {
        ques1_1_a.classList.add('border-[#EE7900]', 'shadow-custom');
        ques1_2_a.classList.remove('border-[#EE7900]', 'shadow-custom');
        ques1_3_a.classList.remove('border-[#EE7900]', 'shadow-custom');
    });

    document.getElementById('ques-4-2-a').addEventListener('click', function() {
        ques1_2_a.classList.add('border-[#EE7900]', 'shadow-custom');
        ques1_1_a.classList.remove('border-[#EE7900]', 'shadow-custom');
        ques1_3_a.classList.remove('border-[#EE7900]', 'shadow-custom');
    });
    
    document.getElementById('ques-4-3-a').addEventListener('click', function() {
        ques1_2_a.classList.remove('border-[#EE7900]', 'shadow-custom');
        ques1_1_a.classList.remove('border-[#EE7900]', 'shadow-custom');
        ques1_3_a.classList.add('border-[#EE7900]', 'shadow-custom');
    });
});

// qustion 5
document.addEventListener("DOMContentLoaded", function() {
    var ques1_1_a = document.getElementById('ques-5-1-a');
    var ques1_2_a = document.getElementById('ques-5-2-a');
    var ques1_3_a = document.getElementById('ques-5-3-a');
    var ques1_4_a = document.getElementById('ques-5-4-a');

    document.getElementById('ques-5-1-a').addEventListener('click', function() {
        ques1_1_a.classList.add('border-[#EE7900]', 'shadow-custom');
        ques1_2_a.classList.remove('border-[#EE7900]', 'shadow-custom');
        ques1_3_a.classList.remove('border-[#EE7900]', 'shadow-custom');
        ques1_4_a.classList.remove('border-[#EE7900]', 'shadow-custom');
    });

    document.getElementById('ques-5-2-a').addEventListener('click', function() {
        ques1_2_a.classList.add('border-[#EE7900]', 'shadow-custom');
        ques1_1_a.classList.remove('border-[#EE7900]', 'shadow-custom');
        ques1_3_a.classList.remove('border-[#EE7900]', 'shadow-custom');
        ques1_4_a.classList.remove('border-[#EE7900]', 'shadow-custom');
    });
    
    document.getElementById('ques-5-3-a').addEventListener('click', function() {
        ques1_2_a.classList.remove('border-[#EE7900]', 'shadow-custom');
        ques1_1_a.classList.remove('border-[#EE7900]', 'shadow-custom');
        ques1_3_a.classList.add('border-[#EE7900]', 'shadow-custom');
        ques1_4_a.classList.remove('border-[#EE7900]', 'shadow-custom');
    });

    document.getElementById('ques-5-4-a').addEventListener('click', function() {
        ques1_2_a.classList.remove('border-[#EE7900]', 'shadow-custom');
        ques1_1_a.classList.remove('border-[#EE7900]', 'shadow-custom');
        ques1_3_a.classList.remove('border-[#EE7900]', 'shadow-custom');
        ques1_4_a.classList.add('border-[#EE7900]', 'shadow-custom');
    });
});

// qustion 6
document.addEventListener("DOMContentLoaded", function() {
    var ques1_1_a = document.getElementById('ques-6-1-a');
    var ques1_2_a = document.getElementById('ques-6-2-a');
    var ques1_3_a = document.getElementById('ques-6-3-a');

    document.getElementById('ques-6-1-a').addEventListener('click', function() {
        ques1_1_a.classList.add('border-[#EE7900]', 'shadow-custom');
        ques1_2_a.classList.remove('border-[#EE7900]', 'shadow-custom');
        ques1_3_a.classList.remove('border-[#EE7900]', 'shadow-custom');
    });

    document.getElementById('ques-6-2-a').addEventListener('click', function() {
        ques1_2_a.classList.add('border-[#EE7900]', 'shadow-custom');
        ques1_1_a.classList.remove('border-[#EE7900]', 'shadow-custom');
        ques1_3_a.classList.remove('border-[#EE7900]', 'shadow-custom');
    });
    
    document.getElementById('ques-6-3-a').addEventListener('click', function() {
        ques1_2_a.classList.remove('border-[#EE7900]', 'shadow-custom');
        ques1_1_a.classList.remove('border-[#EE7900]', 'shadow-custom');
        ques1_3_a.classList.add('border-[#EE7900]', 'shadow-custom');
    });
});



