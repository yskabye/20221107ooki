$(function () {
    $('input').on("keydown", function (e) {
        var n = $("input").length;
        if (e.which == 13) {
            e.preventDefault();
            var Index = $('input').index(this);
            var nextIndex = $('input').index(this) + 1;
            if (nextIndex == 3) {
                $('input[name="email"]').focus();
            } else if (nextIndex < n) {
                $('input')[nextIndex].focus();   // 次の要素へフォーカスを移動
            } else {
                $('textarea').focus();        // 最後の要素ではフォーカスを外す
            }
        }
    });

    $('input[name="hname"]').on("change", function(e) {
        var hname = $('input[name="hname"]').val();
        if (hname == null) hname = '';
        var fname = $('input[name="fname"]').val();
        if (fname == null) fname = '';
        $('input[name="fullname"]').val(hname + ' ' +fname);
    });

    $('input[name="fname"]').on("change", function (e) {
        var hname = $('input[name="hname"]').val();
        if (hname == null) hname = '';
        var fname = $('input[name="fname"]').val();
        if (fname == null) fname = '';
        $('input[name="fullname"]').val(hname + ' ' + fname);
    });

});