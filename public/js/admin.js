$(document).ready(function(e){
    graphUsers();
    graphProducts();
    graphOrders();
});

function graphUsers(){
    $.ajax({
        url:'/getUsersPerMonth',
        method:'GET',
        dataType:'json',
        success:function(data){
            divisao = Math.round((Math.max.apply(null,data)/2));
            var ctx = document.getElementById('users');
            var myLineChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                    datasets: [{
                        label: 'Usuários cadastrados',
                        data: data  ,
                        borderColor: 'rgba(57, 84, 124, 1)',
                        backgroundColor: 'rgba(57, 84, 124, 0.2)',
                    }],
                } ,
                options: {
                    title: {
                        display: true,
                        text: 'Usuários Cadastrados'
                    },
                    animation: {
                        duration: 2000
                    },
                    hover:{
                        animationDuration: 1000
                    },
                    responsiveAnimationDuration: 2000,
                    scales:{
                        yAxes:[{
                            ticks:{
                                beginAtZero: true,
                                stepSize:divisao
                            }
                        }]
                    }
                }
            });
        },
        error:function(e){
            console.log(e);
        }
    })
}

function graphProducts(){
    $.ajax({
        url:'/getChallengesPerMonth',
        method:'GET',
        dataType:'json',
        success:function(data){
            divisao = Math.round((Math.max.apply(null,data)/2));
            var ctx = document.getElementById('challenges');
            var myLineChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                    datasets: [{
                        label: 'Desafios cadastrados',
                        data: data  ,
                        borderColor: 'rgba(37, 145, 47, 1)',
                        backgroundColor: 'rgba(37, 145, 47, 0.2)',
                    }],
                } ,
                options: {
                    title: {
                        display: true,
                        text: 'Desafios Cadastrados'
                    },
                    animation: {
                        duration: 2000
                    },
                    hover:{
                        animationDuration: 1000
                    },
                    responsiveAnimationDuration: 2000,
                    scales:{
                        yAxes:[{
                            ticks:{
                                beginAtZero: true,
                                stepSize:divisao
                            }
                        }]
                    }
                }
            });
        },
        error:function(e){
            console.log(e);
        }
    })
}

function graphOrders(){
    $.ajax({
        url:'/getChallengesUsersPerMonth',
        method:'GET',
        dataType:'json',
        success:function(data){
            divisao = Math.round((Math.max.apply(null,data)/2));
            var ctx = document.getElementById('challengesusers');
            var myLineChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                    datasets: [{
                        label: 'Respostas aos desafios',
                        data: data ,
                        borderColor: 'rgba(145, 25, 25, 1)',
                        backgroundColor: 'rgba(145, 25, 25, 0.2)',
                    }],
                } ,
                options: {
                    title: {
                        display: true,
                        text: 'Respostas aos desafios'
                    },
                    animation: {
                        duration: 2000
                    },
                    hover:{
                        animationDuration: 1000
                    },
                    responsiveAnimationDuration: 2000,
                    scales:{
                        yAxes:[{
                            ticks:{
                                beginAtZero: true,
                                stepSize:divisao
                            }
                        }]
                    }
                }
            });
        },
        error:function(e){
            console.log(e);
        }
    })
}
