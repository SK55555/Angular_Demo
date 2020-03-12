import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ClentsComponent } from './clents.component';

describe('ClentsComponent', () => {
  let component: ClentsComponent;
  let fixture: ComponentFixture<ClentsComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ClentsComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ClentsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
