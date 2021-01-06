import { Usuario } from './usuario.model';
import { Service } from './service.model';
import { Payment } from './payment.model';

export interface Subscription {

  id: number;

  user_id: number;

  user: Usuario

  service_id: number;

  service: Service;

  payment_id: number;

  payment: Payment;

  due_date: Date;
}
