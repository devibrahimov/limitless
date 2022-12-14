@extends('layouts.frontend.master')
@section('title') Sifarişlərim @endsection
@section('content')
<div id="myOrders">
    <div class="container">
        <div class="myAccount-section">
            <div class="profile-menu">
                <div class="profile-greeting">
                    <h5>Salam <span>Elbəy Omarov</span></h5>
                </div>
                <div class="profile-menu_items">
                    <a href="" class="profile-menu_item">
                        <div class="profile-menu_icon">
                            <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 8C9.1875 8 11 6.21875 11 4C11 1.8125 9.1875 0 7 0C4.78125 0 3 1.8125 3 4C3 6.21875 4.78125 8 7 8ZM9.78125 9H9.25C8.5625 9.34375 7.8125 9.5 7 9.5C6.1875 9.5 5.40625 9.34375 4.71875 9H4.1875C1.875 9 0 10.9062 0 13.2188V14.5C0 15.3438 0.65625 16 1.5 16H12.5C13.3125 16 14 15.3438 14 14.5V13.2188C14 10.9062 12.0938 9 9.78125 9Z" fill="#849097"/>
                            </svg>
                        </div>
                        <h6>Mənim hesabım</h6>
                    </a>
                    <a href="" class="profile-menu_item active-profile">
                        <div class="profile-menu_icon">
                            <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 4.03125V5.53125L7.90625 6.46875C7.6875 5.375 8.03125 4.28125 8.8125 3.5C9.4375 2.84375 10.2812 2.53125 11.1562 2.53125H11.1875L9.40625 4.3125L9.875 7.125L12.6875 7.59375L14.5 5.8125C14.5 6.6875 14.1562 7.5625 13.5 8.1875C13.2188 8.5 12.875 8.71875 12.5312 8.875C12.5625 8.90625 12.625 8.96875 12.6875 9L13.6562 9.96875C13.9688 9.78125 14.2812 9.53125 14.5625 9.25C15.75 8.0625 16.25 6.3125 15.8438 4.6875C15.75 4.28125 15.4688 4 15.0938 3.875C14.6875 3.78125 14.2812 3.90625 14.0312 4.15625L12.1875 6L11.1562 5.84375L11 4.8125L12.8438 3C13.125 2.71875 13.2188 2.3125 13.125 1.9375C13 1.5625 12.7188 1.25 12.3125 1.15625C10.6562 0.75 8.9375 1.21875 7.75 2.4375C7.4375 2.75 7.15625 3.09375 6.9375 3.5H7V4.03125ZM3.3125 15.1875C2.90625 15.5938 2.1875 15.5938 1.78125 15.1875C1.59375 15 1.46875 14.7188 1.46875 14.4375C1.46875 14.1562 1.59375 13.9062 1.78125 13.6875L6 9.5L4.9375 8.4375L0.75 12.625C0.25 13.125 0 13.7812 0 14.4375C0 15.125 0.25 15.7812 0.75 16.25C1.21875 16.75 1.875 17 2.5625 17C3.21875 17 3.875 16.75 4.375 16.25L7.5 13.125C7.21875 12.625 7.03125 12.0625 7.03125 11.4688L3.3125 15.1875ZM15.6562 13.375L12 9.71875C11.25 9 10.1875 8.84375 9.3125 9.28125L6 5.96875V4L2 1L0 3L3 7H4.9375L8.25 10.3438C7.84375 11.2188 7.96875 12.2812 8.6875 13L12.3438 16.6875C12.8125 17.125 13.5312 17.125 14 16.6875L15.6562 15.0312C16.0938 14.5625 16.0938 13.8438 15.6562 13.375Z" fill="#849097"/>
                            </svg>
                        </div>
                        <h6>Sifarişlərim</h6>
                    </a>
                    <a href="" class="profile-menu_item">
                        <div class="profile-menu_icon">
                            <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.4688 0H1.5C0.65625 0 0 0.6875 0 1.5V12.5C0 13.3438 0.65625 14 1.5 14H16.4688C17.3125 14 18 13.3438 18 12.5V1.5C18 0.6875 17.3125 0 16.4688 0ZM16.2812 12.5H1.6875C1.5625 12.5 1.5 12.4375 1.5 12.3125V1.6875C1.5 1.59375 1.5625 1.5 1.6875 1.5H16.2812C16.4062 1.5 16.4688 1.59375 16.4688 1.6875V12.3125C16.4688 12.4375 16.4062 12.5 16.2812 12.5ZM6 10.375C6 10.1875 5.8125 10 5.625 10H3.375C3.15625 10 3 10.1875 3 10.375V10.625C3 10.8438 3.15625 11 3.375 11H5.625C5.8125 11 6 10.8438 6 10.625V10.375ZM12 10.375C12 10.1875 11.8125 10 11.625 10H7.375C7.15625 10 7 10.1875 7 10.375V10.625C7 10.8438 7.15625 11 7.375 11H11.625C11.8125 11 12 10.8438 12 10.625V10.375Z" fill="#849097"/>
                            </svg>
                        </div>
                        <h6>Kreditlərim</h6>
                    </a>
                    <a href="" class="profile-menu_item">
                        <div class="profile-menu_icon">
                            <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 4.03125V5.53125L7.90625 6.46875C7.6875 5.375 8.03125 4.28125 8.8125 3.5C9.4375 2.84375 10.2812 2.53125 11.1562 2.53125H11.1875L9.40625 4.3125L9.875 7.125L12.6875 7.59375L14.5 5.8125C14.5 6.6875 14.1562 7.5625 13.5 8.1875C13.2188 8.5 12.875 8.71875 12.5312 8.875C12.5625 8.90625 12.625 8.96875 12.6875 9L13.6562 9.96875C13.9688 9.78125 14.2812 9.53125 14.5625 9.25C15.75 8.0625 16.25 6.3125 15.8438 4.6875C15.75 4.28125 15.4688 4 15.0938 3.875C14.6875 3.78125 14.2812 3.90625 14.0312 4.15625L12.1875 6L11.1562 5.84375L11 4.8125L12.8438 3C13.125 2.71875 13.2188 2.3125 13.125 1.9375C13 1.5625 12.7188 1.25 12.3125 1.15625C10.6562 0.75 8.9375 1.21875 7.75 2.4375C7.4375 2.75 7.15625 3.09375 6.9375 3.5H7V4.03125ZM3.3125 15.1875C2.90625 15.5938 2.1875 15.5938 1.78125 15.1875C1.59375 15 1.46875 14.7188 1.46875 14.4375C1.46875 14.1562 1.59375 13.9062 1.78125 13.6875L6 9.5L4.9375 8.4375L0.75 12.625C0.25 13.125 0 13.7812 0 14.4375C0 15.125 0.25 15.7812 0.75 16.25C1.21875 16.75 1.875 17 2.5625 17C3.21875 17 3.875 16.75 4.375 16.25L7.5 13.125C7.21875 12.625 7.03125 12.0625 7.03125 11.4688L3.3125 15.1875ZM15.6562 13.375L12 9.71875C11.25 9 10.1875 8.84375 9.3125 9.28125L6 5.96875V4L2 1L0 3L3 7H4.9375L8.25 10.3438C7.84375 11.2188 7.96875 12.2812 8.6875 13L12.3438 16.6875C12.8125 17.125 13.5312 17.125 14 16.6875L15.6562 15.0312C16.0938 14.5625 16.0938 13.8438 15.6562 13.375Z" fill="#849097"/>
                            </svg>
                        </div>
                        <h6>Servis mərkəzləri</h6>
                    </a>
                    <a href="" class="profile-menu_item">
                        <div class="profile-menu_icon">
                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.3125 2.03125C13.5 0.5 10.7188 0.71875 9 2.5C7.25 0.71875 4.46875 0.5 2.65625 2.03125C0.3125 4 0.65625 7.21875 2.34375 8.9375L7.8125 14.5312C8.125 14.8438 8.53125 15.0312 9 15.0312C9.4375 15.0312 9.84375 14.8438 10.1562 14.5312L15.6562 8.9375C17.3125 7.21875 17.6562 4 15.3125 2.03125ZM14.5625 7.875L9.09375 13.4688C9.03125 13.5312 8.96875 13.5312 8.875 13.4688L3.40625 7.875C2.25 6.71875 2.03125 4.53125 3.625 3.1875C4.84375 2.15625 6.71875 2.3125 7.90625 3.5L9 4.625L10.0938 3.5C11.25 2.3125 13.125 2.15625 14.3438 3.15625C15.9375 4.53125 15.7188 6.71875 14.5625 7.875Z" fill="#849097"/>
                            </svg>
                        </div>
                        <h6>Bəyəndiklərim</h6>
                    </a>
                    <a href="" class="profile-menu_item">
                        <div class="profile-menu_icon">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.9688 4.5C13.9688 4.1875 13.9062 3.84375 13.75 3.5625L12.2188 0.6875C12.0625 0.28125 11.6875 0 11.25 0H2.71875C2.28125 0 1.90625 0.28125 1.75 0.6875L0.21875 3.5625C0.0625 3.875 0 4.1875 0 4.53125C0 6.40625 0 13 0 13C0 13.5625 0.4375 14 1 14H13C13.5312 14 14 13.5625 14 13C14 13 13.9688 6.40625 13.9688 4.5ZM10.9375 1.5L12.2812 4H8.6875L7.9375 1.5H10.9375ZM3.03125 1.5H6.03125L5.28125 4H1.6875L3.03125 1.5ZM1.5 12.5C1.5 11.1875 1.5 7.59375 1.5 5.5H5V7.5C5 7.78125 5.21875 8 5.5 8H8.5C8.75 8 9 7.78125 9 7.5V5.5H12.4688C12.4688 7.59375 12.4688 11.1875 12.5 12.5H1.5Z" fill="#849097"/>
                            </svg>
                        </div>
                        <h6>Bağlamalarım</h6>
                    </a>
                </div>
            </div>
            <div class="profile-form">
                <div class="profile-form_title">
                    <h3>Sifarişlərim</h3>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Məhsulun adı</th>
                            <th>Sifariş tarixi</th>
                            <th>Miqdarı</th>
                            <th>Status</th>
                            <th>Sifariş nömrsəi</th>
                        </tr>
                        <tr>
                            <th>Iphone 12</th>
                            <th>12.04.2022</th>
                            <th>12</th>
                            <th>Hazırlanır</th>
                            <th>#12828</th>
                        </tr>
                        <tr>
                            <th>Iphone 12</th>
                            <th>12.04.2022</th>
                            <th>12</th>
                            <th>Hazırlanır</th>
                            <th>#12828</th>
                        </tr>
                        <tr>
                            <th>Iphone 12</th>
                            <th>12.04.2022</th>
                            <th>12</th>
                            <th>Hazırlanır</th>
                            <th>#12828</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
