var Chat ={
    template : `
    <div class="row clearfix">
    <div class="col-lg-12">
    <div class="card chat-app">
    <div class="chat">
    <div class="chat-header clearfix">
    <div class="row">
    <div class="col-lg-6">
    <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
    </a>
    <div class="chat-about">
    <h6 class="m-b-0">WSL Assistant</h6>
    </div>
    </div>
    </div>
    </div>
    <div class="chat-history" v-for="history in list_answer">
    <ul class="m-b-0">
    <li class="clearfix">
    <div class="message-data text-right">
    <span class="message-data-time">10:10 AM, Today</span>
    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
    </div>
    <div class="message other-message float-right"> {{history.question}} </div>
    </li>
    <li class="clearfix">
    <div class="message-data">
    <span class="message-data-time">10:12 AM, Today</span>
    </div>
    <div class="message my-message">{{history.answer}}</div>
    </li>
    </ul>
    </div>
    <div class="chat-message clearfix">
    <div class="input-group mb-0">
    <div class="input-group-prepend">
    <span class="input-group-text"><i class="fa fa-send"></i></span>
    </div>
    <input v-model="question" @keyup.enter="send()" type="text" class="form-control" placeholder="Enter text here...">
    </div>
    </div>
    </div>
    `,

    data(){
        return{
            list_answer:[],
            question:'',
            id_user : 1

        }
    },
    methods :{
        async get_answer(){
            var answer = await axios.get("http://localhost/sevima-hackathon/backend/public/api/get_answer");
            console.log(answer);
            this.list_answer = answer.data;
        },

        async send(){
            var data_question = {
                question:this.question,
                id_user : this.id_user
            };
            var send = await axios.post("http://localhost/sevima-hackathon/backend/public/api/get_question", data_question);
            console.log(send);
            if(send.data.status == true){
                this.get_answer();
                this.question = '';
            }else{
                alert("Gagal!");
            }
        }
    },
    mounted(){
        this.get_answer();
        this.question = '';
    }
}