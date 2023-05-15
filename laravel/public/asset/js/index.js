// 現在時刻を表示する関数
function displayTime() {
    const now = new Date();
    const hours = now.getHours().toString().padStart(2, '0');
    const minutes = now.getMinutes().toString().padStart(2, '0');
    const seconds = now.getSeconds().toString().padStart(2, '0');
    document.querySelector('.clock').textContent = `${hours}:${minutes}:${seconds}`;
}

// 1秒ごとに現在時刻を更新する処理
setInterval(displayTime, 1000);
