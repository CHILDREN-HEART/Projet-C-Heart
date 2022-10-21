import { Chart, registerables } from 'chart.js';
Chart.register(...registerables);


const canva_1 : any | null = document.getElementById("captor_1_canvas")
const canva_2 : any | null  = document.getElementById("captor_2_canvas")

if (canva_1) {
    if (canva_2) {
        const chart_capteur_1 = new Chart(canva_1, {
            type: 'line',
            data: {
                datasets: [{
                    data: [],
                    label: "Température",
                    borderColor: "#3e95cd",
                    fill: false
                }, {
                    data: [],
                    label: "humidité",
                    borderColor: "#8e5ea2",
                    fill: false
                }, {
                    data: [],
                    label: "Pm 2.5",
                    borderColor: "#3cba9f",
                    fill: false
                }, {
                    data: [],
                    label: "Pm 10",
                    borderColor: "#e8c3b9",
                    fill: false
                }, {
                    data: [],
                    label: "CO2",
                    borderColor: "#c45850",
                    fill: false
                }
                ]
            },
        });

        const chart_capteur_2 = new Chart(canva_2, {
            type: 'line',
            data: {
                datasets: [{
                    data: [],
                    label: "Température",
                    borderColor: "#3e95cd",
                    fill: false
                }, {
                    data: [],
                    label: "humidité",
                    borderColor: "#8e5ea2",
                    fill: false
                }, {
                    data: [],
                    label: "Pm 2.5",
                    borderColor: "#3cba9f",
                    fill: false
                }, {
                    data: [],
                    label: "Pm 10",
                    borderColor: "#e8c3b9",
                    fill: false
                }, {
                    data: [],
                    label: "CO2",
                    borderColor: "#c45850",
                    fill: false
                }
                ]
            },
        });

        setInterval(() => {

            // @ts-ignore
            const captor_1 : []  = JSON.parse(localStorage.getItem("captor1")) || []
            // @ts-ignore
            const captor_2 : [] = JSON.parse(localStorage.getItem("captor2")) || []

            chart_capteur_1.data.labels = [...Array(captor_1?.[0].length).keys()] || []
            chart_capteur_1.data.datasets.forEach((dataset, k)=> {
                if(captor_1?.[k]) {
                   dataset.data = captor_1[k]
                }
            })

            chart_capteur_2.data.labels = [...Array(captor_2?.[0].length).keys()] || []
            chart_capteur_2.data.datasets.forEach((dataset, k)=> {
                if(captor_2?.[k]) {
                    dataset.data = captor_2[k]
                }
            })

            chart_capteur_1.update()
            chart_capteur_2.update()
        }, 2000)
    }
}

