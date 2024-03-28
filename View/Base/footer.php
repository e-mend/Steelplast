
    <script type="text/x-template" id="form-template">
        <div class="bk rounded" id="btn">
            <img src="../../public/images/icon/Stock.png" alt="" class="rounded" id="stok">
            <div class="d-flex rounded" id="btn12">
                <div class="row mt-5 mx-auto col-12">
                    <div class="btn btn-danger-play mx-auto col-3 fs-5" data-bs-toggle="modal" data-bs-target="#budgetModal">
                        {{ formBtn }}
                    </div>
                </div>
            </div>

            <div class="modal fade" id="budgetModal" tabindex="-1" aria-labelledby="budgetModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="budgetModalLabel">
                                {{ translation.form }}
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row mb-3 mx-auto fs-3 justify-content-center">
                                {{ formQuestion }}
                            </div>
                            <div class="row mt-2 mx-auto justify-content-center red-btn">
                                <div class="btn btn-danger-play col-6 fs-5" @click="showResponse(1)">
                                    {{ translation.yes }}
                                </div>
                                <div class="btn btn-danger-play col-6 fs-5"  @click="showResponse(2)">
                                    {{ translation.no }}
                                </div>
                            </div>
                            <div class="row mt-2 mx-auto justify-content-center" v-if="choice == 2">
                                <div class="btn btn-danger-play col-12 fs-5">
                                    {{ translation.response }}
                                </div>
                            </div>
                            <div class="row mt-2 mx-auto justify-content-center" v-if="choice == 1">
                                <div class="row rounded mx-auto justify-content-center">
                                    <div class="col-12">
                                        <label for="companyName" class="form-label fs-5">
                                            {{ translation.companyName }}:
                                        </label>
                                        <input id="companyName" v-model="formData.companyName" type="text" class="form-control fs-5">
                                    </div>
                                    <div class="col-12">
                                        <label for="email" class="form-label fs-5">
                                            EMAIL:
                                        </label>
                                        <input id="email" type="text" v-model="formData.email" class="form-control fs-5">
                                    </div>
                                    <div class="col-12">
                                        <label for="cellphone" class="form-label fs-5">
                                            {{ translation.companyPhone }}:
                                        </label>
                                        <input id="cellphone" v-model="formData.companyPhone" type="text" class="form-control fs-5">
                                    </div>
                                    <div class="col-12">
                                        <label for="taxId" class="form-label fs-5">
                                            CNPJ/ TAX ID:
                                        </label>
                                        <input id="taxId" type="text" v-model="formData.taxId" class="form-control fs-5">
                                    </div>
                                    <div class="col-12">
                                        <label for="website" class="form-label fs-5">
                                            WEBSITE:
                                        </label>
                                        <input id="website" v-model="formData.website" type="text" class="form-control fs-5">
                                    </div>
                                    <div class="col-12">
                                        <label for="material" class="form-label fs-5">
                                            MATERIAL:
                                        </label>
                                        <input id="material" v-model="formData.material" type="text" class="form-control fs-5">
                                    </div>
                                    <div class="col-12">
                                        <label for="message" class="form-label fs-5">
                                            {{ translation.message }}:
                                        </label>
                                        <textarea name="message" v-model="formData.message" id="message" cols="20" rows="10" class="form-control fs-5">
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                {{ translation.close }}
                            </button>
                            <button type="button" class="btn btn-danger-play" @click="sendForm">
                                {{ translation.send }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </script>
</body>
</html>