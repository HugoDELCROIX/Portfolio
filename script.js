let versionNumber = document.querySelector('#versionNumber')

window.addEventListener('load', () => {
    fetch('https://api.github.com/repos/HugoDELCROIX/Portfolio/releases', {
        method: 'GET',
        headers: new Headers({
            'Accept': 'Application/vnd.github.v3+json'
        }),
    })
    .then(response => {
        if(response.status === 200){
            response.json().then((data) => {
                let vNum = data[0].tag_name
                versionNumber.textContent = vNum
            })
        } else {
            versionNumber.textContent = "Releases"
        }
    })
    .catch((err) => {
        if (err) versionNumber.textContent = "Releases"
    })
})