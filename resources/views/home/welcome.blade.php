<!DOCTYPE html>
<html lang="en">
	@include('header') <br> 
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Toolbar-->
					<div class="toolbar py-4 py-lg-0" id="kt_toolbar">
						<!--begin::Container-->
						<div id="kt_toolbar_container" class="container d-flex flex-stack flex-wrap d-flex align-items-stretch justify-content-between flex-lg-grow-1" style=" max-width:100% !important; z-index: 1006">
							<div class="d-flex align-items-stretch py-3 py-md-0">
								<!--begin::Wrapper-->
								<div class="mb-4">
									<div style="min-width: 120px; margin-right: 12px" >
									<select class="form-control"
										id="select-header-year" data-kt-select2="true"
										data-placeholder="{{trans('display.select')}}"
										data-allow-clear="true" data-kt-heating-table-filter="role"
										data-hide-search="true">
										@foreach($years as $year)
										<option value="{{$year}}"
											{{$year == \Carbon\Carbon::now()->year ? 'selected' : ''}}>
											{{$year}}</option>
										@endforeach
									</select>
									</div>
									<!--end::Input-->
								</div>
								<!--end::Wrapper-->
								<div class="mb-4">
									<div style="min-width: 90px; margin-right: 12px" >
									<select class="form-control"
										id="select-header-month" data-kt-select2="true"
										data-placeholder="{{trans('display.select')}}"
										data-allow-clear="true" data-kt-heating-table-filter="role"
										data-hide-search="true">
										@foreach($months as $month)
										<option value="{{$month}}"
											{{$month == \Carbon\Carbon::now()->month ? 'selected' : ''}}>
											{{$month}}</option>
										@endforeach
									</select>
									</div>
									<!--end::Input-->
								</div>
								<!--begin::Button-->
								<div class="mb-4">
									<div style="min-width: 150px; margin-right: 12px">
										<select class="form-control select" data-kt-select2="true" data-placeholder="{{trans('display.au_level1')}}"  data-allow-clear="true" id="au_level1">
											<option value="0">{{trans('display.au_level1')}}</option>
											@foreach($auLevel1 as $level)
												<option value="{{$level->id}}"  {{$level->id == 361 ? 'selected' : ''}}>{{$level->name}}</option>
											@endforeach
										</select>
									</div>
									<!--end::Input-->
								</div>
								<div class="mb-4">
									<div style="min-width: 150px;  margin-right: 12px">
										<select class="form-control" data-kt-select2="true" data-placeholder="{{trans('display.au_level2')}}" data-allow-clear="true"  id="level2_div" name="au2"></select>
									</div>
								</div>
								<div class="mb-4">
									<div style="min-width: 150px; margin-right: 12px">
										<select class="form-control" data-kt-select2="true" data-placeholder="{{trans('display.au_level3')}}" placeholder="{{trans('display.au_level2')}}"  data-allow-clear="true"  id="level3_div" name="au3">
											<option value="0">{{trans('display.select')}}</option>
										</select>
									</div>
								</div>
								<div class="mb-4">
									<div style="min-width: 150px; margin-right: 12px; border-radius: 0.475rem;">
										<input type="text" name="map_building_name" id="map_building_name" class="form-control" placeholder="{{trans('display.building_name')}}" value="" style="padding: 0.75rem 3rem 0.75rem 1rem; font-size: 1.1rem; font-weight: 500; line-height: 1.5; background-color: #fff; border: 1px solid #e4e6ef; border-radius: 0.475rem;"/>
									</div>
								</div>
								<div class="mb-4">
									<div style="min-width: 150px; margin-right: 12px; border-radius: 0.475rem;">
										<input type="text" name="map_building_no" id="map_building_no" class="form-control" placeholder="{{trans('display.building_no')}}" value="" style="padding: 0.75rem 3rem 0.75rem 1rem; font-size: 1.1rem; font-weight: 500; line-height: 1.5; background-color: #fff; border: 1px solid #e4e6ef; border-radius: 0.475rem;"/>
									</div>
								</div>
								<div class="mb-4">
								<div style="min-width: 80px;">
									<button type="submit" class="btn btn-primary fw-bold px-6"
										data-kt-menu-dismiss="true"
										data-kt-ghgreport-table-filter="filter" id="search_button">{{trans('display.search')}}</button>
									</div>
								</div>
								<!--end::Button-->
							</div>
							<!--end::Actions-->
							<div class="d-flex align-items-center">
								<div class="mb-4">
									<!--begin::Card toolbar-->
									<div class="card-toolbar">
										<!--begin::Toolbar-->
										<div class="d-flex justify-content-end" data-kt-codelist-table-toolbar="base">
											<button type="button" class="btn btn-primary d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" id="calc-button">
												<span>
													<a>
														<img alt="Logo" src="/assets/media/logos/calculator.png" class="mr-2 logo-default h-25px"/>
													</a>
												</span>
												<span> {{trans('display.calculate')}} </span>
											</button>
											<!--begin::Menu 1-->
											<div class="menu menu-sub menu-sub-dropdown" id="calc-modal" data-kt-menu="true" style="z-index: 1006 !important">
												<!--begin::Modal dialog-->
												<div class="mw-550px">
													<!--begin::Modal content-->
													<div class="modal-content">
														<!--begin::Modal header-->
														<div class="modal-header" id="kt_modal_add_position_header" style="padding-top: 10px;padding-bottom: 10px;">
															<!--begin::Modal title-->
															<h2 class="fw-bolder fs-4">{{trans('display.Please enter a calculated value')}}</h2>
															<!--end::Modal title-->
															<!--begin::Close-->
															<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-positions-modal-action="close">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
																<span class="svg-icon svg-icon-1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
																		<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</div>
															<!--end::Close-->
														</div>
														<!--end::Modal header-->
														<!--begin::Modal body-->
														<div class="modal-body scroll-y mx-5 mx-xl-1 my-0">
															<!--begin::Form-->
															<form id="kt_modal_add_position_form" class="form" action="javascript:;">
																<!--begin::Scroll-->
																<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_position_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_position_header" data-kt-scroll-wrappers="#kt_modal_add_position_scroll" data-kt-scroll-offset="300px">
																	<div class="pt-0 pb-2 grid grid-cols-2 gap-2 d-flex">
																		<div style='width: 50%'>
																			<div class="align-items-center bg-light-primary rounded p-3 mb-2" style="height:">
																				<div class="fs-6 text-dark fw-bolder mb-2">
																					{{trans('display.ghg_electricity_value')}}</div> 
																				<!-- <div class="fv-row mb-8">
																				
																					<label class="form-label fs-8 fw-bold">{{trans('display.Integrated network emission coefficient')}}(тнСО<sub>2</sub>/МВтц):</label>
																					<span class="form-control mb-3 mb-lg-0" style="padding: 5px">0,86</span>
																				
																				</div> -->
																				<div class="fv-row mb-2">
																					<!--begin::Input-->
																					<label class="form-label fs-8 fw-bold">{{trans('display.electricity_value')}}(МВтц/жил):</label>
																					<input type="answer" name="elec_value" id="elec_value" class="form-control mb-3 mb-lg-0" style="padding: 5px" placeholder="{{trans('display.meaning')}}"  value=""/>
																					<!--end::Input-->
																				</div>
																																	<!-- tsahilgaaniii heregleenii hariu -->
																				<div id="elec_answer">
																					<!--<label class="form-label fs-8 fw-bold">{{trans('display.ghg_electricity_value')}}(тнСО<sub>2</sub>/жил):</label>
																					<div class="form-control" id="answer_elec" value="">0 СО2/жил</div>
																					<span class="fs-5 fw-bolder text-gray-900" style="font-family: Arial">МВтц/жил</span> -->
																					<!-- <input type="answer" name="value" id="answer_elec" class="form-control mb-3 mb-lg-0" style="padding: 5px" placeholder="{{trans('display.answer')}}" value=""/> -->
																					
																				</div>
																			</div>
																		</div>
																		<div style='width: 50%'>
																			<div class="align-items-center bg-light-primary rounded p-3 mb-2">
																				<div class="fs-6 text-dark fw-bolder mb-2">
																					{{trans('display.ghg_heating_value')}}</div>
																				<!-- <div class="fv-row mb-2">
																					
																					<label class="form-label fs-8 fw-bold">{{trans('display.Emission coefficient for hot water production')}}(тнСО<sub>2</sub>/Гкал):</label>
																					<span class="form-control mb-3 mb-lg-0" style="padding: 5px">0,5</span>
																					
																				</div>
																				<div class="fv-row mb-2">
																					
																					<label class="form-label fs-8 fw-bold">{{trans('display.Loss of hot water distribution network')}}:</label>
																					<span class="form-control mb-3 mb-lg-0" style="padding: 5px">0,15</span>
																					
																				</div> -->
																				<div class="fv-row mb-2">
																					<!--begin::Input-->
																					<label class="form-label fs-8 fw-bold">{{trans('display.Hot water value')}}(Гкал/жил):</label>
																					<input type="answer" name="heat_value" id="heat_value" class="form-control mb-3 mb-lg-0" style="padding: 5px" placeholder="{{trans('display.meaning')}}" value=""/>
																				</div>
																				<!-- dulaanii heregleenii hariu -->
																				<div id="heat_answer">
																					
																					<!-- <label class="form-label fs-8 fw-bold">{{trans('display.ghg_heating_value')}}(тнСО<sub>2</sub>/жил):</label>
																					<div class="form-control" id="answer_heat" value=""> 0 СО2/жил</div> -->
																				
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<!--end::Scroll-->
																<!--begin::Actions-->
																<div class="text-center mt-5px">
																	<button type="reset" class="btn btn-light me-3" data-kt-positions-modal-action="cancel" id="reset-button">{{trans('display.clear')}}</button>
																	<button type="submit" class="btn btn-primary" id="calculate">
																		<span class="indicator-label">{{trans('display.calculate')}}</span>
																		<span class="indicator-progress">{{trans('messages.please_wait')}}
																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																	</button>
																</div>
																<!--end::Actions-->
																<!--begin::Item-->
																<div class="d-flex flex-column scroll-y me-n7 pe-7 pt-4" id="kt_modal_add_position_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_position_header" data-kt-scroll-wrappers="#kt_modal_add_position_scroll" data-kt-scroll-offset="300px">
																	<div id="total_answer">

																	</div>
																	<!-- <div class="pt-0 pb-2 grid grid-cols-2 gap-2 d-flex flex-column mw-sm-100">
																		<div>
																			<div class="align-items-center bg-light-primary rounded p-5 mb-2">
																				<div class="fs-6 text-dark fw-bolder mb-2">
																					{{trans('display.Build total ghg emissions')}}</div>
																				<div class="fv-row mb-4 ">
																					<div class="form-control" id="calculate_answer" value=""> 0 СО2/жил</div>
																				</div>
																			</div>
																		</div>
																	</div> -->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="d-flex align-items-center bg-light-danger rounded p-3 ">
																	<!--begin::Logo-->
																	<div class="header-logo me-3 me-md-5 flex-grow-1 flex-lg-grow-0">
																		<a href="/">
																			<img alt="Logo" src="/assets/media/logos/warning_logo.png" class="logo-default h-25px mw-25px"/>
																		</a>
																	</div>
																	<!--end::Logo-->
																	<!--begin::Title-->
																	<div class="flex-grow-1 me-2">
																		<a href="#" class=" text-gray-800 text-hover-danger fs-5">{{trans('messages.Please note that calculations are based on the information you provide')}}!!!</a>
																	</div>
																	<!--end::Title-->
																</div>
																<!--end::Item-->
															</form>
															<!--end::Form-->
														</div>
														<!--end::Modal body-->
													</div>
													<!--end::Modal content-->
												</div>
												<!--end::Modal dialog-->
											</div>
										</div>
										<!--end::Toolbar-->
										<!--begin::Group actions-->
										<div class="d-flex justify-content-end align-items-center d-none" data-kt-codelist-table-toolbar="selected">
											<div class="fw-bolder me-5">
											<span class="me-2" data-kt-codelist-table-select="selected_count"></span>Selected</div>
											<button type="button" class="btn btn-danger" data-kt-codelist-table-select="delete_selected">Delete Selected</button>
										</div>
										<!--end::Group actions-->
										<!--begin::Modal - Add task-->
										<div class="modal fade" id="kt_modal_edit_codelist" tabindex="-1" aria-hidden="true">
											<!--begin::Modal dialog-->
											<div class="modal-dialog modal-dialog-centered mw-650px">
												<!--begin::Modal content-->
												<div class="modal-content">
													<!--begin::Modal header-->
													<div class="modal-header" id="kt_modal_edit_codelist_header">
														<!--begin::Modal title-->
														<h2 class="fw-bolder">{{trans('display.edit')}}</h2>
														<!--end::Modal title-->
														<!--begin::Close-->
														<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-codelists-edit-modal-action="close">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
															<span class="svg-icon svg-icon-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
																	<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
														<!--end::Close-->
													</div>
													<!--end::Modal header-->
												</div>
												<!--end::Modal content-->
											</div>
											<!--end::Modal dialog-->
										</div>
										<!--end::Modal - Add task-->
									</div>
									<!--end::Card toolbar-->
								</div>
							</div>
						</div>
						<!--end::Container-->
					</div>
					<!--end::Toolbar-->
					<!--begin::Container-->
					<style>
						    .sidepanelpopup {
							float: left;
							position: absolute;
							width: 0%;
							overflow: hidden;
							z-index: 100;
							margin-left: 8px;
							left: 0;
							transition: 0.5s;
							overflow-y: auto;		
							top: 16%;
							height: 74%;
							background-color: white;
							border-radius: 0.475rem;
						}
					</style>
					<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl" style=" margin-rigth: 30px; max-width: 100% !important">
						<!--begin::Post-->
						<div class="content flex-row-fluid" id="kt_content">
							<!--begin::Row-->
							<div class="row g-5 g-xl-3">
								<div class="col-xl-12">
									<!--begin::Row-->
									<div class="row gx-5 gx-xl-3 mb-5 mb-xl-8">
										<div class="col-xl-16">
											<!--begin::Tiles Widget 1-->
											<div class="card h-850px  bgi-no-repeat bgi-size-cover card-xl-stretch" id="mapid">
												<div id="mappopup" class="ol-popup" style="max-height: 250px;overflow-y: scroll;">
													<a href="#" id="mappopup-closer" class="ol-popup-closer"></a>
													<div id="mappopup-content"></div>
												</div>
												<div class="menu menu-lg-rounded menu-column menu-lg-row menu-title-gray-900 menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-600 fw-bold align-items-stretch" style="z-index: 1010;" id="#kt_header_menu" data-kt-menu="true">
													<div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion here show me-lg-1 absolute bg-sky-100 border border-gray-300 rounded-lg ml-2 mt-17">
														<div class="menu-link p-2">
															<a href="/">
																<img alt="Logo" src="/assets/media/logos/select_l.png" class="logo-default h-40px" />
															</a>
														</div>
														<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-100% h-100% bg-gradient-to-r from-slate-500 to-[#60a5fa] transform bg-opacity-30">
															<!--begin::Scroll-->
															<div class="d-flex flex-column scroll-y" id="kt_modal_add_position_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_position_header" data-kt-scroll-wrappers="#kt_modal_add_position_scroll" data-kt-scroll-offset="100px">
																<div class="w-[100%] text-center border-b-[3px] border-slate-100 hover:border-cyan-200 text-2xl" data-bs-toggle="collapse" data-bs-target="#layer"><label for=""><b>{{trans('display.layers')}}</b></label>
																</div>
																<div id="layer" class="collapse show">
																	<div class="grid grid-cols-12  border-b-[1px] border-cyan-400 hover:border-cyan-200">
																		<div class="grid justify-items-center col-span-1">
																			<input type="checkbox" id="building-all" class="switch-all appearance-none checked:bg-blue-500 border-slate-500 w-[15px] h-[15px] hover:w-[20px] hover:h-[20px]  checked:bg-slate-400 checked:hover:bg-slate-400" data-type="building"/>
																		</div> 
																		<div class="w-[100%] text-left col-span-11" data-bs-toggle="collapse"  data-bs-target="#demo">
																			<label class="font-bold"><b>Байгууламж</b></label>
																		</div>
																	</div>
																	<div class="grid grid-col-12">
																		<div id="demo" class="collapse col-start-2 col-span-11 show" aria-expanded="true" style="margin-left: 15px">
																			<div class="grid grid-cols-12">
																				<div class="grid justify-items-center">
																					<input type="checkbox" id="building-uddt" class="child-building building-uddt appearance-none checked:bg-blue-500 border-slate-500 w-[15px] h-[15px] hover:w-[20px] hover:h-[20px]  checked:bg-slate-400 checked:hover:bg-slate-400"/>
																				</div>
																				<div class="col-span-11">
																					<label for="building-uddt" class="text-left font-bold">УДДТ</label>
																				</div>
																			</div>
																			<div class="grid grid-cols-12">
																				<div class="grid justify-items-center">
																					<input type="checkbox" data-type="purpose" class="child-building building-simple switch-all appearance-none checked:bg-blue-500 border-slate-500 w-[15px] h-[15px] hover:w-[20px] hover:h-[20px]  checked:bg-slate-400 checked:hover:bg-slate-400"/>
																				</div>
																				<div class="col-span-11">
																					<label for="" class="text-left font-bold" data-bs-toggle="collapse" data-bs-target="#countertype">{{trans('display.building')}}</label>
																				</div>
																			</div>
																			<div id="countertype" class="collapse show">
																			<div class="grid grid-cols-12">
																					<div class="grid justify-items-center col-start-2 col-span-1">
																						<input type="checkbox" class="child-building building-class building-purpose appearance-none checked:bg-blue-500 border-slate-500 w-[15px] h-[15px] hover:w-[20px] hover:h-[20px]  checked:bg-slate-400 checked:hover:bg-slate-400" data-type="purpose-type"/>
																					</div>
																					<div class="col-span-10">
																						<div class="">
																							<label for="" class="text-left font-bold" data-bs-toggle="collapse" data-bs-target="#purposetype">{{trans('display.object_purpose_type')}}</label>
																						</div>
																						<div id="purposetype" class="collapse show">
																							@foreach(@$purposeType as $purpose)
																								<div class="grid grid-cols-12">
																									<div class="grid justify-items-center col-start-1 col-span-1">
																										<input type="checkbox" id="building-type-{{$purpose->id}}" data-type="purpose" value="{{$purpose->id}}" data-id="{{$purpose->id}}" class="layer-shower child-building-purpose appearance-none border-[2px] border-[{{$purpose->boundary_color}}] w-[15px] h-[15px] hover:w-[20px] hover:h-[20px]  checked:bg-[{{$purpose->fill_color}}] checked:hover:bg-[{{$purpose->fill_color}}]" />
																									</div>
																									<div class="col-span-10">
																										<label for="building-type-{{$purpose->id}}">{{@$purpose->name}}</label>
																									</div>
																								</div>
																							@endforeach
																						</div>
																					</div>
																				</div>
																				<div class="grid grid-cols-12">
																					<div class="grid justify-items-center col-start-2 col-span-1">
																						<input type="checkbox" class="child-building building-class building-department appearance-none checked:bg-blue-500 border-slate-500 w-[15px] h-[15px] hover:w-[20px] hover:h-[20px]  checked:bg-slate-400 checked:hover:bg-slate-400" data-type="department-type"/>
																					</div>
																					<div class="col-span-10">
																						<div class="">
																							<label for="" class="text-left font-bold" data-bs-toggle="collapse" data-bs-target="#deptype">{{trans('display.department_type')}}</label>
																						</div>
																						<div id="deptype" class="collapse show">
																							@foreach(@$departments as $dep)
																								@if(@$dep->childs->count() > 0)
																									<div class="text-left grid grid-cols-12">
																										<div class="grid justify-items-center col-start-1 col-span-1">
																											<input type="checkbox" value="{{$dep->department_id}}" class="layer-shower child-building child-department-type appearance-none checked:bg-blue-500 border-slate-500 w-[15px] h-[15px] hover:w-[20px] hover:h-[20px]  checked:bg-slate-400 checked:hover:bg-slate-400" data-type="department-type"/>
																										</div>
																										<div class="col-span-11">
																											<div class="text-left grid grid-cols-12">
																												<div class="grid col-span-11">
																													<label for="" class="text-left font-bold" data-bs-toggle="collapse" data-bs-target="#deptype-child-{{$dep->department_id}}">{{$dep->name}}</label>
																													<div id="deptype-child-{{$dep->department_id}}" class="collapse">
																														@foreach(@$dep->childs as $child)
																															<div class="text-left grid grid-cols-12">
																																<div class="grid justify-items-center col-start-1 col-span-1">
																																	<input type="checkbox" id="department-type-{{$child->department_id}}" data-type="type" data-id="{{$child->department_id}}" value="{{$child->department_id}}" class="layer-shower child-building child-department-type appearance-none border-[2px] w-[15px] h-[15px] hover:w-[20px] hover:h-[20px] " />
																																</div>
																																<div class="col-span-10">
																																	<label for="department-type-{{$child->department_id}}">{{$child->name}}</label>
																																</div>
																															</div>
																														@endforeach
																													</div>	
																												</div>
																											</div>
																										</div>
																									</div>
																								@else
																									<div class="text-left grid grid-cols-12">
																										<div class="grid justify-items-center col-start-1 col-span-1">
																											<input type="checkbox" id="department-type-{{$dep->department_id}}" data-type="type" data-id="{{$dep->department_id}}" value="{{$dep->department_id}}" class="layer-shower child-department-type appearance-none border-[2px] w-[15px] h-[15px] hover:w-[20px] hover:h-[20px] " />
																										</div>
																										<div class="col-span-10">
																											<label for="department-type-{{$dep->department_id}}">{{$dep->name}}</label>
																										</div>
																									</div>
																								@endif
																							@endforeach
																						</div>
																					</div>
																				</div>
																			</div>
																			<div id="electricity" class="collapse">
																				<div class="grid grid-cols-12">
																					<div class="grid justify-items-center">
																						<input type="checkbox" class="child-electricity switch-all appearance-none checked:bg-blue-500 border-slate-500 w-[15px] h-[15px] hover:w-[20px] hover:h-[20px]  checked:bg-slate-400 checked:hover:bg-slate-400" data-type="electricity_meter_build"/>
																					</div>
																					<div class="col-span-11">
																						<label for="" class="text-left font-bold" >{{trans('display.electricity_meter_build')}}</label>
																					</div>
																				</div>
																			</div>
																			<div id="heat" class="collapse">
																				<div class="grid grid-cols-12">
																					<div class="grid justify-items-center">
																						<input type="checkbox" class="child-heat switch-all appearance-none checked:bg-blue-500 border-slate-500 w-[15px] h-[15px] hover:w-[20px] hover:h-[20px]  checked:bg-slate-400 checked:hover:bg-slate-400" data-type="heat_meter_build"/>
																					</div>
																					<div class="col-span-11">
																						<label for="" class="text-left font-bold">{{trans('display.heat_meter_build')}}</label>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div>
													<div class="row p-0 px-9" style="position: absolute;z-index: 1000;width: calc(100% - 100px);justify-content: center;display: flex; margin-left: 50px">
														<!--begin::Col-->
														<div class="col" >
															<div class="border border-gray-300 text-center min-w-125px rounded pt-1 pb-1 my-6 h-100% bg-sky-100">
																<div class="fs-3 fw-bolder text-primary d-block">{{trans('display.Number of buildings')}}</div>
																<div class="fs-3 fw-bolder text-gray-900 counted" style="font-family: Arial" data-kt-countup="true" id="building1" data-kt-countup-value="$buildingCount"></div>
															</div>
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col">
															<div class="border border-gray-300 text-center min-w-125px rounded pt-1 pb-1 my-6 h-100% bg-sky-100">
																<div class="fs-3 fw-bolder text-primary d-block">{{trans('display.ghg_indicator')}}</div>
																<span class="fs-3 fw-bolder text-gray-900 counted" style="font-family: Arial" data-kt-countup="true" data-kt-countup-value="$buildingCount" id="building4">0</span>
																<span class="fs-5 fw-bolder text-gray-900" style="font-family: Arial">тн СО<sub>2</sub>/жил</span>
															</div>
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col">
															<div class="border border-gray-300 text-center min-w-125px rounded pt-1 pb-1 my-6 h-100% bg-sky-100">
																<span class="fs-3 fw-bolder text-primary d-block">{{trans('display.electricity_value')}}</span>
																<span class="fs-3 fw-bolder text-gray-900 counted" style="font-family: Arial" data-kt-countup="true" data-kt-countup-value="$buildingCount" id="building2">0</span>
																<span class="fs-5 fw-bolder text-gray-900" style="font-family: Arial">МВтц/жил</span>
															</div>
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col">
															<div class="border border-gray-300 text-center min-w-125px rounded pt-1 pb-1 my-6 h-100% bg-sky-100">
																<span class="fs-3 fw-bolder text-primary d-block">{{trans('display.heat_value')}}</span>
																<span class="fs-3 fw-bolder text-gray-900 counted" style="font-family: Arial" data-kt-countup="true" data-kt-countup-value="$buildingCount" id="building3">0</span>
																<span class="fs-5 fw-bolder text-gray-900" style="font-family: Arial">Гкал/жил</span>
															</div>
														</div>
														<!--end::Col-->
													</div>
												</div>
										    </div>
										</div>
									</div>
									<!--end::Row-->
								</div>
								<div id="building-info-data" class="hidden absolute right-0 mt-[140px] mr-[30px] w-lg-500px h-700px hover:w-lg-500px duration-300 bg-gradient-to-r from-slate-500 to-[#60a5fa] bg-light-primary  transform bg-opacity-30 rounded-br-lg rounded-bl-lg rounded-tl-lg rounded-tr-lg overflow-auto">
                				</div>
								<!--end::Col-->
							</div>
							<div class="row g-5 g-xl-3">
								<div class="col-xl-9" id="kt_amcharts_1">
									
								</div>
								<div class="col-xl-3" id="list">
									
								</div>
							</div> 
							
							<div id="kt_amcharts_3"></div>
						</div>
					</div> <br>
					@include('footer')
				</div>
			</div>
		</div>
		<!--end::Root-->
		<script>var hostUrl = "assets/";</script>
		<script src="/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<script src="/assets/plugins/ol6/build/ol.js"></script>
    	<script src="/assets/plugins/ol-ext-master/dist/ol-ext.js"></script>	
		<!-- map test -->
		<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
		<script>
			var geoware = "{{ Config::get('reference.geo_server_address') }}geoserver/ghg/wms";
		</script>
		<!--end::Page Custom Javascript-->
		<script src="assets/js/map/baselayers.js"></script>
		<script src="assets/js/map/map_web.js"></script>
		<script src="assets/js/map/map_script.js"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<!-- calculate ghg in user -->
		<script>
			$("#calculate").on('click', function() {
				showAnswers();
				var heat = $("#heat_value").val();
				var elec = $("#elec_value").val();
				$.ajax({
					url: "/ghg/heat",
					type: 'post',
					data: {
						heat: heat, elec: elec
					},
					beforeSend: function() {},
					success: function(response) {
						if(response){
							$("#heat_answer").html(response);
							// $("#elec_answer").html(response);
							// $("#total_answer").html(response);
						}
						else{
							$("#heat_answer").html('');
						}
					},
					error: function(xhr, textStatus, error) {
									console.log(xhr.statusText);
									console.log(textStatus);
									console.log(error);
								},
								async: false,
				})
				.done(function(data) {});
			})
		</script>
		<script>
			$("#calculate").on('click', function() {
				var heat = $("#heat_value").val();
				var elec = $("#elec_value").val();
				$.ajax({
					url: "/ghg/elec",
					type: 'post',
					data: {
						heat: heat, elec: elec
					},
					beforeSend: function() {},
					success: function(response) {
						if(response){
							$("#elec_answer").html(response);
							// $("#elec_answer").html(response);
							// $("#total_answer").html(response);
						}
						else{
							$("#elec_answer").html('');
						}
					},
					error: function(xhr, textStatus, error) {
									console.log(xhr.statusText);
									console.log(textStatus);
									console.log(error);
								},
								async: false,
				})
				.done(function(data) {});
			})
		</script>
		<script>
			$("#calculate").on('click', function() {
				var heat = $("#heat_value").val();
				var elec = $("#elec_value").val();
				$.ajax({
					url: "/ghg/value",
					type: 'post',
					data: {
						heat: heat, elec: elec
					},
					beforeSend: function() {},
					success: function(response) {
						if(response){
							// $("#heat_answer").html(response);
							// $("#elec_answer").html(response);
							$("#total_answer").html(response);
						}
						else{
							$("#total_answer").html('');
						}
					},
					error: function(xhr, textStatus, error) {
									console.log(xhr.statusText);
									console.log(textStatus);
									console.log(error);
								},
								async: false,
				})
				.done(function(data) {});
			})
		</script>

		<script>
			$("#reset-button").on('click', function() {
				showhidetotal();
				showhideheat();
				showhideelec();
			});	
			function showhidetotal() {  
				var div = document.getElementById("total_answer");  
				if (div.style.display !== "none")   
					div.style.display = "none";  
				// else  
					// div.style.display = "block";  
			}; 
			function showhideheat() {  
				var div = document.getElementById("heat_answer");  
				if (div.style.display !== "none")   
					div.style.display = "none";  
				// else  
					// div.style.display = "block";  
			};
			function showhideelec() {  
				var div = document.getElementById("elec_answer");  
				if (div.style.display !== "none")   
					div.style.display = "none";  
				// else  
					// div.style.display = "block";  
			};
			function showAnswers(){
				var div = document.getElementById("total_answer"); 
				var div1 = document.getElementById("heat_answer"); 
				var div2 = document.getElementById("elec_answer"); 
				div.style.display = "block"; 
				div1.style.display = "block"; 
				div2.style.display = "block"; 
			}
		</script>

		<script>
			 // Close button handler
			 const elementCalClose = document.getElementById('calc-modal');

			const calcModalEdit = new bootstrap.Modal(elementCalClose);

			 const closeButtonEdit = elementCalClose.querySelector('[data-kt-positions-modal-action="close"]');
			closeButtonEdit.addEventListener('click', e => {
				$("#calc-button").trigger('click')
			});
			function buildingInfo(params) {

				var type = 'all';
				if($("#level3_div").val() != 0)
				{
					type = 'au3';
					code = $("#level3_div").val();
					month = $("#select-header-month").val();
					year = $("#select-header-year").val();
				}
				else if($("#level2_div").val() != 0)
				{
					type = 'au2';
					code = $("#level2_div").val();
					month = $("#select-header-month").val();
					year = $("#select-header-year").val();
				}
				else if($("#au_level1").val() != 0)
				{
					type = 'au1';
					code = $("#au_level1").val();
					month = $("#select-header-month").val();
					year = $("#select-header-year").val();
				}
				else
				{
					type = 'all';
					code = null;
					month = $("#select-header-month").val();
					year = $("#select-header-year").val();
				}
				$.ajax({
						url: "/building/info/data",
						type: 'post',
						// dataType: 'json',
						data: {
							type: type, code: code, year: year, month: month
						},
						beforeSend: function() {
				
						},
						success: function(response) {
							if(response){
								$("#building1").html(response[0].count);
								$("#building2").html(response[0].elec_value ? response[0].elec_value: 0);
								$("#building3").html(response[0].heat_value ? response[0].heat_value: 0);
								$("#building4").html(response[0].ghg_value ? response[0].ghg_value: 0);
							}
							else{
								$("#building1").html(0);
								$("#building2").html(0);
								$("#building3").html(0);
								$("#building4").html(0);
							}
						},
						error: function(xhr, textStatus, error) {
							console.log(xhr.statusText);
							console.log(textStatus);
							console.log(error);
						},
						async: false,
					}).done(function(data) {});
			}
		</script>
		<script>
			function barChart(params) {
				var type = 'all';
					if($("#level3_div").val() != 0)
					{
						type = 'admin_unit3';
						code = $("#level3_div").val();
						year = $("#select-header-year").val();
					}
					else if($("#level2_div").val() != 0)
					{
						type = 'admin_unit2';
						code = $("#level2_div").val();
						year = $("#select-header-year").val();
					}
					else if($("#au_level1").val())
					{
						type = 'admin_unit1';
						code = $("#au_level1").val();
						year = $("#select-header-year").val();
					}
					else
					{
						type = 'all';
						code = null;
						year = $("#select-header-year").val();
					}
					$.ajax({
							url: "/bar/chart/home",
							type: 'post',
							// dataType: 'json',
							data: {
								code: code, year: year, type: type
							},
							beforeSend: function() {
							},
							success: function(response) {
								if(response){
									$("#kt_amcharts_3").html(response);
								}
								else{
									$("#kt_amcharts_3").html('');
								}
							},
							error: function(xhr, textStatus, error) {
								console.log(xhr.statusText);
								console.log(textStatus);
								console.log(error);
							},
							async: false,
						}).done(function(data) {});
			}
			function pieChart(params) {
				var type = 'all';
					if($("#level2_div").val() != 0)
					{
						type = 'admin_unit3';
						code = $("#level2_div").val();
						month = $("#select-header-month").val();
						year = $("#select-header-year").val();
					}
					else if($("#au_level1").val())
					{
						type = 'admin_unit2';
						code = $("#au_level1").val();
						month = $("#select-header-month").val();
						year = $("#select-header-year").val();
					}
					else
					{
						type = 'all';
						code = null;
						month = $("#select-header-month").val();
						year = $("#select-header-year").val();
					}
					$.ajax({
							url: "/pie/chart/home",
							type: 'post',
							// dataType: 'json',
							data: {
								code: code, year: year, type: type, month: month
							},
							beforeSend: function() {
							},
							success: function(response) {
								if(response){
								$("#kt_amcharts_1").html(response);
								}
								else{
									$("#kt_amcharts_1").html('');
								}
							},
							error: function(xhr, textStatus, error) {
								console.log(xhr.statusText);
								console.log(textStatus);
								console.log(error);
							},
							async: false,
						}).done(function(data) {});
					}

			function pieChartList(params) {
				var type = 'all';
					if($("#level2_div").val() != 0)
					{
						type = 'admin_unit3';
						code = $("#level2_div").val();
						month = $("#select-header-month").val();
						year = $("#select-header-year").val();
					}
					else if($("#au_level1").val())
					{
						type = 'admin_unit2';
						code = $("#au_level1").val();
						month = $("#select-header-month").val();
						year = $("#select-header-year").val();
					}
					else
					{
						type = 'all';
						code = null;
						month = $("#select-header-month").val();
						year = $("#select-header-year").val();
					}
					$.ajax({
							url: "/pie/chart/home/list",
							type: 'post',
							// dataType: 'json',
							data: {
								code: code, year: year, type: type, month: month
							},
							beforeSend: function() {
							},
							success: function(response) {
								if(response){
								$("#list").html(response);
								}
								else{
									$("#list").html('');
								}
							},
							error: function(xhr, textStatus, error) {
								console.log(xhr.statusText);
								console.log(textStatus);
								console.log(error);
							},
							async: false,
						}).done(function(data) {});
					}

		</script>
		<script>
			$("#au_level1").on('change', function(){
				// console.log('ddd');
				$("#level2_div").html('');
				var aimagCode = $(this).val();
				if(aimagCode){
					$.ajax({
						url: "/level2/by/parent",
						type: 'post',
						// dataType: 'json',
						data: {auLevel1Code: aimagCode},
						beforeSend: function() {

						},
						success: function(response) {
							$("#level2_div").append(response);
						},
						error: function (xhr, textStatus, error) {
							console.log(xhr.statusText);
							console.log(textStatus);
							console.log(error);
						},
						async: false,
					}).done(function(data) {
					})
				}
				else{
					$("#level2_div").val(null).trigger('change');
					$("#level3_div").val(null).trigger('change');
				}
			})

			$("#level2_div").on('change', function() {
				$("#level3_div").html('');
				var soumCode = $(this).val();
				if(soumCode){
					$.ajax({
						url: "/level3/by/parent",
						type: 'post',
						// dataType: 'json',
						data: {
							auLevel2Code: soumCode
						},
						beforeSend: function() {

						},
						success: function(response) {

							$("#level3_div").append(response);
						},
						error: function(xhr, textStatus, error) {
							console.log(xhr.statusText);
							console.log(textStatus);
							console.log(error);
						},
						async: false,
					}).done(function(data) {
					})
					}
					else{
						$("#level3_div").val(null).trigger('change');
					}
			})
			var aimagCode = $("#au_level1").val();
			$.ajax({
				url: "/level2/by/parent",
				type: 'post',
				// dataType: 'json',
				data: {auLevel1Code: aimagCode},
				beforeSend: function() {

				},
				success: function(response) {
					$("#level2_div").append(response);
				},
				error: function (xhr, textStatus, error) {
					console.log(xhr.statusText);
					console.log(textStatus);
					console.log(error);
				},
				async: false,
			}).done(function(data) {
			})
		</script>
		<script>
			$("#object_purpose_type").on('change', function(){
				var buildingPurposeCode = $(this).val();
				$.ajax({
					url: "/building/purpose",
					type: 'post',
					data: {
						buildingPurposeCode: buildingPurposeCode
					},
					// dataType: 'json',
					data: {
						buildingPurposeCode: buildingPurposeCode
					},
					beforeSend: function() {

					},
					success: function(response) {
						addSelectedBuildingPurposeLayerToMap(map, 'buildingLayer', geoware, response.geom)
						var params = {FORMAT: format,
							VERSION: "1.1.1",
							tiled: true,
							LAYERS: "ghg:view_ghg_object_geom_purpose_type",
							exceptions: "application/vnd.ogc.se_inimage",
							viewparams: "buildingPurposeCode:" + $(this).val(),
								};
								if(building){
									building.getSource().updateParams(params);
								}
								else{
									return null;
								}
						changeLayerVisible(map, 'buildingLayer', true, geoware, addBuildingLayerMethodName, [$(this).val()]);
					},
					error: function(xhr, textStatus, error) {
						console.log(xhr.statusText);
						console.log(textStatus);
						console.log(error);
					},
					async: false,
				}).done(function(data) {
				})
			})
		</script>
		<script>
			buildingInfo();
			$("#search_button").on('click', function(){
				var name = $("#map_building_name").val();
				var no = $("#map_building_no").val();
				var bagCode = $("#level3_div").val();
				var soumCode = $("#level2_div").val();
				var aimagCode = $("#au_level1").val();
				var month = $("#select-header-month").val();
				var year = $("#select-header-year").val();
				buildingInfo();
				pieChart();
				pieChartList();
				barChart();
				map.removeLayer(currentAimagLayer);
				map.removeLayer(currentSoumLayer);
				map.removeLayer(currentBagLayer);
				if(bagCode != 0){
					$.ajax({
						url: "/au3/by/id",
						type: 'post',
						// dataType: 'json',
						data: {
							auLevel3Code: bagCode
						},
						beforeSend: function() {

						},
						success: function(response) {
							addSelectedBagLayerToMap(map, 'selectedBag', geoware, response.geom)
						},
						error: function(xhr, textStatus, error) {
							console.log(xhr.statusText);
							console.log(textStatus);
							console.log(error);
						},
						async: false,
					}).done(function(data) {
					})
					}
				else if(soumCode != 0){
					$.ajax({
						url: "/au2/by/id",
						type: 'post',
						// dataType: 'json',
						data: {
							auLevel2Code: soumCode
						},
						beforeSend: function() {

						},
						success: function(response) {

							addSelectedSoumLayerToMap(map, 'selectedSoum', geoware, response.geom)
						},
						error: function(xhr, textStatus, error) {
							console.log(xhr.statusText);
							console.log(textStatus);
							console.log(error);
						},
						async: false,
					}).done(function(data) {
					})
					}
				else if(aimagCode != 0){
					$.ajax({
						url: "/au1/by/id",
						type: 'post',
						// dataType: 'json',
						data: {
							auLevel1Code: aimagCode
						},
						beforeSend: function() {

						},
						success: function(response) {

							addSelectedAimagLayerToMap(map, 'selectedAimag', geoware, response.geom)
						},
						error: function(xhr, textStatus, error) {
							console.log(xhr.statusText);
							console.log(textStatus);
							console.log(error);
						},
						async: false,
					}).done(function(data) {
					})
					}
					if(!$(".building-simple").is(":checked"))
					{
						$(".building-simple").prop('checked', true).trigger('click');
					}
					buildingShow($(".building-simple").is(":checked"));
					// changeLayerVisible(map, 'buildingLayer', true, geoware, addBuildingLayerMethodName, [$(this).val()]);
				})
		</script>
		<script>
			function buildingFilterShow(visible) {
				unit = getAdminUnit();
				if (visible) {
					var selectedTypes = getBuildingTypes();
					var selectedPurposes = getBuildingPurposes();
					
					var buildingTypes = escapeCommasSemiColons(selectedTypes);
					var buildingPurposes = escapeCommasSemiColons(selectedPurposes);
					if (building) {
						var params = {
							FORMAT: format,
							VERSION: "1.1.1",
							tiled: true,
							LAYERS: "ghg:view_ghg_object_geom",
							exceptions: "application/vnd.ogc.se_inimage",
							viewparams:
								"au_id:" +
								unit["code"] +
								";level:" +
								unit["type"] +
								";object_purposes:" +
								buildingPurposes
						};
						building.getSource().updateParams(params);
						building.setVisible(true);
					} else {
						changeLayerVisible(
							map,
							"buildingLayer",
							true,
							geoware,
							addBuildingLayerMethodName,
							[unit["code"], unit["type"], buildingTypes, buildingPurposes]
							);
						}
					} else {
						if (building) {
							building.setVisible(false);
						}
					}
				}
		</script>
		<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
		<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
		<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
	</body>
</html>