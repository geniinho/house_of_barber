<div class="mr-5 ml-5 pt-5 pb-5">
    <div class="profile-header">
        <h2>
            <fa-icon [icon]="faClock"></fa-icon> Serviços Agendados
        </h2>
    </div>
    <div class="profile pt-5">


        <table class="table " style="text-align: center;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Serviço</th>
                </tr>
            </thead>
            <tbody *ngFor="let item of cliente">
                <tr>
                    <td>{{item.id}}</td>
                    <td>{{item.nome}}</td>
                    <td>{{item.idade}}</td>
                    <td>{{item.servico.nome}}</td>
                </tr>
            </tbody>
        </table>



    </div>
</div>
