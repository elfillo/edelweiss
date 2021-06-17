import $ from 'jquery';

class Modal {
    constructor() {
        this.openModalBtns = document.querySelectorAll('[data-show-modal]');
        this.events();
    }

    events() {
        this.openModalBtns.forEach(el => {
            el.addEventListener("click", e => {
                e.preventDefault();
                let type = $(el).data('show-modal');
                Modal.showModal(type);
            });
        });

        $(document).on('click', '.close-modal', function () {
            Modal.closeModal();
        });
    }

    static showModal(type) {
        switch (type) {
            case 'call-back':
                Modal.getCallBackModal();
                break;
            case 'parking':
                Modal.getParkingModal();
                break;
            case 'apartment':
                Modal.getApartmentModal();
                break;
            case 'thank':
                Modal.getThankModal();
                break;
        }
    }

    static getCallBackModal() {
        let modal = `
            <div class="modal">
                <div class="form form_call-back">
                    <div class="form__close close-modal"></div>
                    <form action="#" class="form__form js-form">
                        <div class="form__title">Закажите звонок от специалиста</div>
                        <div class="form__description">Оставьте данные и наши менеджеры вскоре с вами свяжутся</div>
                        <div class="form__inputs">
                            <div class="form__input">
                                <label for="">Введите имя</label>
                                <input type="text" name="name" placeholder="Имя" autocomplete="off" data-required>
                            </div>
                            <div class="form__input">
                                <label for="">Введите номер</label>
                                <input type="tel" name="phone" placeholder="+7 (9__)-___-__-__" autocomplete="off" data-required>
                            </div>
                        </div>
                        <div class="form__footer">
                            <div class="form__privacy-policy">
                                <label>
                                    Я принимаю <a href="#">Политику Конфиденциальности</a> и соглашаюсь на обработку персональных данных
                                    <input type="checkbox" class="privacy-policy-checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form__submit">
                                <input type="submit" value="Отправить" class="btn btn_light-blue" disabled>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        `;
        $('body').append(modal);
    }

    static getParkingModal() {
        let modal = `
            <div class="modal">
                <div class="form form_parking">
                <div class="form__close close-modal"></div>
                <form action="#" class="form__form js-form">
                    <div class="form__title">Хотите забронировать парковочное место?</div>
                    <div class="form__description">Оставьте данные для связи и наши менеджеры вскоре с вами свяжутся</div>
                    <div class="form__inputs">
                        <div class="form__input">
                            <label for="">Введите имя</label>
                            <input type="text" name="name" placeholder="Имя" autocomplete="off" data-required>
                        </div>
                        <div class="form__input">
                            <label for="">Введите номер</label>
                            <input type="tel" name="phone" placeholder="+7 (9__)-___-__-__" autocomplete="off" data-required>
                        </div>
                    </div>
                    <div class="form__footer">
                        <div class="form__privacy-policy">
                            <label>
                                Я принимаю <a href="#">Политику Конфиденциальности</a> и соглашаюсь на обработку персональных данных
                                <input type="checkbox" class="privacy-policy-checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="form__submit">
                            <input type="submit" value="Отправить" class="btn btn_light-blue" disabled>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        `;
        $('body').append(modal);
    }

    static getApartmentModal() {
        let modal = `
            <div class="modal">
                <div class="form form_apartment">
                <div class="form__close close-modal"></div>
                <form action="#" class="form__form js-form">
                    <div class="form__title">Хотите забронировать квартиру заранее?</div>
                    <div class="form__description">Оставьте данные для связи и наши менеджеры вскоре с вами свяжутся</div>
                    <div class="form__inputs">
                        <div class="form__input">
                            <label for="">Введите имя</label>
                            <input type="text" name="name" placeholder="Имя" autocomplete="off" data-required>
                        </div>
                        <div class="form__input">
                            <label for="">Введите номер</label>
                            <input type="tel" name="phone" placeholder="+7 (9__)-___-__-__" autocomplete="off" data-required>
                        </div>
                    </div>
                    <div class="form__footer">
                        <div class="form__privacy-policy">
                            <label>
                                Я принимаю <a href="#">Политику Конфиденциальности</a> и соглашаюсь на обработку персональных данных
                                <input type="checkbox" class="privacy-policy-checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="form__submit">
                            <input type="submit" value="Отправить" class="btn btn_light-blue" disabled>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        `;
        $('body').append(modal);
    }

    static getThankModal() {
        let modal = `
            <div class="modal">
                <div class="thank">
                    <div class="thank__close close-modal"></div>
                    <div class="thank__title">Спасибо!</div>
                    <div class="thank__text">Ваша заявка успешно отправлена и уже обрабатывается нашими операторами, вскоре с вами свяжутся</div>
                    <div class="thank__link"><a href="/" class="btn btn_light-blue">На главную</a></div>
                </div>
            </div>
        `;
        $('body').append(modal);
    }

    static closeModal() {
        $('.modal').remove();
    }
}

export default Modal;
