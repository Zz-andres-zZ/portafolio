const devtoolIsOpening = () => {
    let before = new Date().getTime();
    console.clear();
    debugger;
    let after = new Date().getTime();
    if (after - before > 10) {
        document.write(
            `<style>body{background:black;margin:0;padding:0}body div{height:100vh;z-index:266521313123;position:relative!important}div[role='button']{display:none}</style><div style="hegiht:100%;display:flex;justify-content:center;align-items:center;"><h2 style="font-size: 5rem;text-align;center;color:#fff">Redireccionando...</h2></div>`
        );
        $(document).ready(() => {
            $(window).attr("location", "view/prohibido/warning.php");
        });
    }
    setTimeout(devtoolIsOpening, 10);
};
devtoolIsOpening();
