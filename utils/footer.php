<hr class="footerline">

<style>
    footer {
        background-color: #fff5f5;
        border: 2px solid #ff7070;
        border-radius: 20px;
        margin: 30px auto;
        padding: 30px 20px;
        max-width: 1200px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        animation: popIn 1s ease;
    }

    .footerline {
        border: none;
        border-top: 2px dashed #ff9494;
        width: 80%;
        margin: 40px auto 0;
    }

    .footerContent, .footcontent {
        padding: 10px 20px;
        text-align: center;
    }

    .footerContent1 {
        font-size: 20px;
        font-weight: bold;
        color: #e94e4e;
    }

    .footerSubtext {
        font-size: 14px;
        color: #777;
    }

    .footerSubtext2 {
        font-size: 14px;
        color: #555;
        margin-top: 10px;
        line-height: 1.6;
    }

    .footcontent p {
        font-size: 14px;
        color: #444;
        line-height: 1.6;
    }

    .footcontent a img {
        margin: 8px;
        transition: transform 0.3s ease;
    }

    .footcontent a img:hover {
        transform: scale(1.1);
    }

    @keyframes popIn {
        from { transform: translateY(20px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }

    @media (max-width: 768px) {
        .row {
            display: flex;
            flex-direction: column;
        }

        .footerContent, .footcontent {
            margin-bottom: 20px;
        }
    }
</style>

<footer>
    <div class="container">
        <div class="row">
            <section>
                <div class="footerContent col-md-4">
                    <p class="footerContent1">
                        <strong>U</strong><span class="small footerSubtext">Event</span>
            
                    </p>
                    <p class="footerSubtext2">
                        UEvent is an event management platform for Chitkara University, where students, faculty, and the event management team can interact and stay informed about all events happening on campus.
                    </p>
                </div>
            </section>
            <section>
                <div class="footcontent col-md-4">
                    <p><br>
                        Address: Atal Shiksha Kunj, Pinjore-Nalagarh National Highway (NH-21A), kalujhinda, Distt, Baddi, Himachal Pradesh 174103<br>
Founded: 2009<br>
Chancellor: Ashok K. Chitkara<br>
Vice-Chancellor: R. S. Grewal
                    </p>
                </div>
            </section>
            <section>
                <div class="footcontent col-md-4">
                    <p>Follow Us:</p>
                    <a href="https://www.facebook.com/ChitkaraUHP/"><img src="https://cdn-icons-png.flaticon.com/512/20/20673.png" width="40px"></a>
                    <a href="https://www.instagram.com/chitkarau/"><img src="https://www.pngarts.com/files/11/IG-Logo-Silhouette-Free-PNG-Image.png" width="50px"></a>
                    <a href="https://en.wikipedia.org/wiki/Chitkara_University,_Himachal_Pradesh"><img src="https://cdn-icons-png.freepik.com/512/5968/5968992.png" width="45px"></a>
                </div>
            </section>
        </div>
    </div>
</footer>
