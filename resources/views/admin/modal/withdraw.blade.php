<div class="modal-content">
    <div class="modal-header"><strong id="id_modal_title" class="modal-title">Realizar saque</strong></div>
        <div class="modal-body">
            <p>Informe abaixo o valor de saque considerando  R$ 15,00, R$ 25,00, R$ 50,00 e R$ 100,00, antes de realizar o saque o sistema ir&aacute; verificar a disponibilidade de saldo em sua conta.</p>
            <div style="width: 100%;height: 50px;">
                <div class="input-group bootstrap-touchspin input-number-aling-center">
                    <span class="input-group-btn">
                        <button class="btn btn-secondary bootstrap-touchspin-down" type="button" id="id_btn_plus_minus_saque" role="minus">-</button>
                    </span>                            
                    <span class="input-group-addon bootstrap-touchspin-prefix input-group-text">$</span>
                        <input type="number" value="10" name="touchspin2"  id="id_value_withdraw" class="form-control" style="display: block;">
                    <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                    <span class="input-group-btn">
                        <button class="btn btn-secondary bootstrap-touchspin-up" type="button" id="id_btn_plus_minus_saque" role="plus">+</button>
                    </span>                            
                </div>
            </div>
        </div>
    <div class="modal-footer">
        <button type="button" class="btn-primary-grey" id="id_btn_modal_saque" role="cancelar">Cancelar</button>
        <button type="button" class="btn-primary-pink" id="id_btn_modal_saque" role="salvar">Sacar</button>                
    </div>
</div>