import { ComponentFixture, TestBed } from '@angular/core/testing';

import { UsuarioDieselComponent } from './usuario-diesel.component';

describe('UsuarioDieselComponent', () => {
  let component: UsuarioDieselComponent;
  let fixture: ComponentFixture<UsuarioDieselComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ UsuarioDieselComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(UsuarioDieselComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
