var flag_1 = 0;
var flag_2 = 0;
var flag_3 = 0;


function check_1(radio) {
    if (radio.checked == true) {
        flag_1 = 1;
    }
    if (flag_1 == 1 && flag_2 == 1 && flag_3 == 1) {
        $(".sendButton").show();
    }
}

function check_2(radio) {
    if (radio.checked == true) {
        flag_2 = 1;
    }
    if (flag_1 == 1 && flag_2 == 1 && flag_3 == 1) {
        $(".sendButton").show();
    }
}

function check_3(radio) {
    if (radio.checked == true) {
        flag_3 = 1;
    }
    if (flag_1 == 1 && flag_2 == 1 && flag_3 == 1) {
        $(".sendButton").show();
    }
}


