<div class="player">
    <div class="player__content">
        <img class="player__button--prev" src="src/img/prev.svg" height="14" width="14">
        <img class="player__button--play" src="src/img/play.svg" height="14" width="14">
        <img class="player__button--next" src="src/img/next.svg" height="14" width="14">
        <img class="player__button--loop" src="src/img/loop.svg" height="14" width="14">
        <img class="player__button--random" src="src/img/random.svg" height="14" width="14">
        <div class="player__player">
            <div class="player__time--current">2:00</div>
            <div class="player__progressbar"></div>
            <div class="player__time">3:59</div>
        </div>
        <div class="player__volume">
            <div class="player__volumeslider"></div>
            <img class="player__volume--image" src="src/img/play.svg" height="25" width="25">
        </div>
        <div class="player__songinfo">
            <img class="player__songinfo--cover" src="src/img/smw.jpg" height="50" width="50">
            <div class="player__songinfo--title">Curse of the Horrible Night</div>
        </div>
        <div class="player__mixer">
            <img src="src/img/mixer2.svg">
            <div class="mixer">
                <div></div>
                <div></div>
                <div></div>

                <div class="mixer__channel--name">Drums</div>
                <div class="mixer__channel--active"></div>
                <input type="range" min="0" max="10" value="10" class="mixer__channel--slider">

                <div class="mixer__channel--name">Bass</div>
                <div class="mixer__channel--active"></div>
                <input type="range" min="0" max="10" value="10" class="mixer__channel--slider">

                <div class="mixer__channel--name">Lead</div>
                <div class="mixer__channel--active"></div>
                <input type="range" min="0" max="10" value="10" class="mixer__channel--slider">

                <div class="mixer__channel--name">Other</div>
                <div class="mixer__channel--active"></div>
                <input type="range" min="0" max="10" value="10" class="mixer__channel--slider">

            </div>
        </div>
    </div>
</div>
