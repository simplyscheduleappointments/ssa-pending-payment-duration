<?php
/**
 * Plugin Name: SSA Customization - Pending Payment Duration
 * Plugin URI:  https://simplyscheduleappointments.com
 * Description: Adjust pending_payment duration (to customize the pending payment duration for use cases like PayPal holding e-check payments)
 * Version:     1.0.0
 * Author:      Simply Schedule Appointments
 * Author URI:  https://simplyscheduleappointments.com
 * Donate link: https://simplyscheduleappointments.com
 * License:     GPLv2
 * Text Domain: simply-schedule-appointments
 * Domain Path: /languages
 *
 * @link    https://simplyscheduleappointments.com
 *
 * @package Simply_Schedule_Appointments
 * @version 1.0.0
 *
 */

/**
 * Copyright (c) 2019 Simply Schedule Appointments (email : support@simplyscheduleappointments.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

add_filter( 'ssa/payments/pending_payment_duration', 'ssa_customize_payments_pending_payment_duration', 10, 3 );
function ssa_customize_forms_pending_form_duration( $duration_in_seconds, $appointment_id, $data ) {
	// appointments will stay in "pending_form" status for $duration_in_seconds before transitioning to "abandoned" (and becoming available for other customers to book)
	
	return 72 * MINUTE_IN_SECONDS; // 72 hour duration

	// other ideas/examples below this line
	// return 3 * HOUR_IN_SECONDS; // 3 hour duration
	// return 30 * MINUTE_IN_SECONDS; // 30 minute duration
}